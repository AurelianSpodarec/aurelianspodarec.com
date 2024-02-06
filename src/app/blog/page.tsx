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
    <div>

      <header>
        <div>
          <h2>Some of my toughts</h2>
          <p>Things I've experienced and figured out with others</p>
        </div>

        <input />
      </header>

      <nav>
        <button className="text-[#c7c7ca]">All Blogs</button>
        <button className="text-[#c7c7ca] bg-[#ffffff17]/90">Design Systems</button>
        <button className="text-[#c7c7ca]">Career Tips</button>
        <button className="text-[#c7c7ca]">Portfolio Tips</button>
      </nav>

      <div className="md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40">
        <div className="flex max-w-3xl flex-col space-y-16">
          {articles.map((article) => (
            <Article key={article.slug} article={article} />
          ))}
        </div>
      </div>

    </div>
  )
}
