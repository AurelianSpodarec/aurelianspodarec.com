import glob from 'fast-glob'

interface Work {
  title: string
  description: string
  author: string
  date: string
  thumbnail: string;
  excerpt: string;
}

export interface WorkWithSlug extends Work {
  slug: string
}

async function importWork(workFilename: string): Promise<WorkWithSlug> {
  let { work } = (await import(`../app/case-studies/${workFilename}`)) as {
    default: React.ComponentType
    work: Work
  }

  return {
    slug: workFilename.replace(/(\/page)?\.mdx$/, ''),
    ...work,
  }
}

export async function getAllWork() {
  let workFilenames = await glob('*/page.mdx', {
    cwd: './src/app/case-studies',
  })

  let works = await Promise.all(workFilenames.map(importWork))
  
  return works.sort((a, z) => +new Date(z.date) - +new Date(a.date))
}
