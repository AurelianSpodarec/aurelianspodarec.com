import { type Metadata } from 'next'

import { SimpleLayout } from '@/components/SimpleLayout'
import { type ArticleWithSlug, getAllArticles } from '@/lib/articles'
import Article from './_components/Article'


export const metadata: Metadata = {
  title: 'Articles',
  description:
    'All of my long-form thoughts on programming, leadership, product design, and more, collected in chronological order.',
}

export default async function ArticlesIndex() {
  let articles = await getAllArticles()

  return (
    <div className="pt-24">

      <header className="flex justify-center mb-4">
        <div>

          <div className="text-center">
            <h2 className="text-gray-200 font-semibold text-6xl">My insights</h2>
            <p className="text-gray-300 text-lg">Things I've experienced and figured out with others</p>
          </div>

          {/* <input /> */}
        </div>
      </header>

      <div className="mb-8">
        <nav className="flex justify-center mx-auto space-x-2">
          <button className="px-3 py-1.5 font-semibold rounded-lg text-sm text-[#c7c7ca] hover:bg-white/10">All Blogs</button>
          <button className="px-3 py-1.5 font-semibold rounded-lg text-sm text-[#c7c7ca] hover:bg-white/10 bg-white/10">Design Systems</button>
          <button className="px-3 py-1.5 font-semibold rounded-lg text-sm text-[#c7c7ca] hover:bg-white/10">Career Tips</button>
          <button className="px-3 py-1.5 font-semibold rounded-lg text-sm text-[#c7c7ca] hover:bg-white/10">Portfolio Tips</button>
        </nav>
      </div>

      <div className="mx-auto max-w-7xl ">
        <div className="grid grid-cols-3 gap-6">
          {articles.map((article) => (
            <Article key={article.slug} article={article} />
          ))}
        </div>
      </div>
      <img src="https://assets-global.website-files.com/647ef68e217211d9af36ec9f/648194c62b75cd4512c70194_Hero%20BG.webp" loading="lazy" sizes="100vw" srcset="https://assets-global.website-files.com/647ef68e217211d9af36ec9f/648194c62b75cd4512c70194_Hero%20BG-p-500.webp 500w, https://assets-global.website-files.com/647ef68e217211d9af36ec9f/648194c62b75cd4512c70194_Hero%20BG-p-800.webp 800w, https://assets-global.website-files.com/647ef68e217211d9af36ec9f/648194c62b75cd4512c70194_Hero%20BG-p-1080.webp 1080w, https://assets-global.website-files.com/647ef68e217211d9af36ec9f/648194c62b75cd4512c70194_Hero%20BG.webp 2556w" alt="" class="ab-section-img" />
    </div>
  )
}
