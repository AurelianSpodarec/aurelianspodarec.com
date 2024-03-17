'use client'

import { useContext } from 'react'
import { useRouter } from 'next/navigation'

import { AppContext } from '@/app/providers'
import { Prose } from '@/components/Prose'
import { type ArticleWithSlug } from '@/lib/articles'

const links = [
  {
    title: "But HTML Large and UGLY! Ewwww 👶🤮👼",
    slug: "ugly-html"
  },
  {
    slug: "clients-dont-scare"
  },
  {
    title: "But you can't do this complicated thing"
  },
  {

  }
]

export function LayoutQA({
  article,
  children,
}: {
  article: ArticleWithSlug
  children: React.ReactNode
}) {
  let router = useRouter()
  let { previousPathname } = useContext(AppContext)

  return (
    <div className="relative mt-16 lg:mt-32 ">
      <aside className="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col mt-32">

        <h3>TailwindCSS QA</h3>
        <ul>
          <li>Ugly HTML</li>

        </ul>
      </aside>
      <main className="lg:pl-72">
        <Prose className="mt-8" data-mdx-content>
          {children}
        </Prose>
      </main>
    </div>
  )
}
