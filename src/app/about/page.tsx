import { type Metadata } from 'next'
import Image from 'next/image'
import Link from 'next/link'
import clsx from 'clsx'

import { Container } from '@/components/Container'
import {
  GitHubIcon,
  InstagramIcon,
  LinkedInIcon,
  XIcon,
} from '@/components/SocialIcons'
import portraitImage from '@/images/portrait.jpg'

function SocialLink({
  className,
  href,
  children,
  icon: Icon,
}: {
  className?: string
  href: string
  icon: React.ComponentType<{ className?: string }>
  children: React.ReactNode
}) {
  return (
    <li className={clsx(className, 'flex')}>
      <Link
        href={href}
        className="group flex text-sm font-medium text-zinc-300 transition hover:text-primary dark:text-zinc-200 dark:hover:text-primary"
      >
        <Icon className="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-primary" />
        <span className="ml-4">{children}</span>
      </Link>
    </li>
  )
}

function MailIcon(props: React.ComponentPropsWithoutRef<'svg'>) {
  return (
    <svg viewBox="0 0 24 24" aria-hidden="true" {...props}>
      <path
        fillRule="evenodd"
        d="M6 5a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H6Zm.245 2.187a.75.75 0 0 0-.99 1.126l6.25 5.5a.75.75 0 0 0 .99 0l6.25-5.5a.75.75 0 0 0-.99-1.126L12 12.251 6.245 7.187Z"
      />
    </svg>
  )
}

export const metadata: Metadata = {
  title: 'About',
  description:
    'I’m Spencer Sharp. I live in New York City, where I design the future.',
}








function Box({ logo, logoName, title, description }: any) {
  return (
    <div>
      <div className="relative bg-[#171717] rounded border ">
        <div className="flex justify-center p-4">
          <img src={logo} className="h-12 rounded" />
        </div>
        <p className="text-center font-normal text-[#c7c7cc] mb-2.5 text-sm">{logoName}</p>
      </div>
    </div>
  )
}

export default function About() {
  return (
    <Container className="mt-16 sm:mt-32">
      <div className=" gap-y-16 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12">

        <div className="lg:pl-20">
          <h1 className="text-4xl font-bold tracking-tight text-zinc-900 sm:text-5xl dark:text-zinc-100">
            I'm Aurelian Spodarec. I live in England and specialise in Front-end Development
          </h1>
          <div className="max-w-xs px-2.5 lg:max-w-none ">
            <Image
              src={portraitImage}
              alt=""
              sizes="(min-width: 1024px) 32rem, 20rem"
              className="w-full aspect-square rounded-2xl bg-zinc-100 object-cover dark:bg-zinc-300 max-h-[500px] overflow-hidden"
            />
          </div>
        </div>

        <div className="lg:order-first lg:row-span-2">
          <div className="mt-6 space-y-7 text-base text-zinc-700 dark:text-zinc-400">

            Hiring the wrong front-end developer is an expensive mistake




            My name is Aurelian Spodarec, born in Poland, living in UK.

            I love focusing on perfection, thus, not always the best choice

            Obsessed with clean code and abstraction, thus, can be a bad thing but learned to have balance.

            I design pretty websites focused on user usaility, accessability and convertion rate by following some key practices

            I like the stoicism, and

            I've build a dozen of personal projects which I never deployed - you can sure check my blog post here going over them.

            You can sure

            Let's be honest, you're not going to hire me just for my skill, but the fact \I'm reliable


            I'm not the one to be left behind. I'm working on some side projects that I want to make a busienss out of it - a lot of developres are.

            Self-taught desinger, coder

            Started with WOrdPress development but changed to

            Over the years building websites and webapps I've discovered that there a need for better tools and or apps to help with common issue that coders and or desingers face in their day to day life.
            I'm still working on these side-proejcts, but you can check an "unfinished", template builder called TailBuilder.com



            Beliefs and values

            - Everything is broken, and that's just fine

            - Systematic approach

            - Efficiency
            Sometimes you need to

            - Stoicism
            Stay calm and figure it out


            - Celebrate the wins
            Enjoy the journey

            Tools and equipment
            - NextJS
            - TypeScript
            - TailwindCSS
            - ShadCN/UI
            - Drizle ORM
            - React
            - React Hook Form

            - Redux
            - VSCode
            - React Query
            - Pixi.js
            - Figma
            - Slack

            / HTML5, CSS3

            <section>

              <h2>Tools and equipment</h2>
              <p>Over the years my work has been featured on leading publications.</p>

              <div className="grid gap-3 grid-cols-6">
                <Box
                  logo="https://cdn.discordapp.com/icons/752553802359505017/065ee8ece89b91115525fef8ae2c15cb.webp?size=128"
                  logoName="NextJS"
                />
                <Box
                  logo="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Typescript_logo_2020.svg/768px-Typescript_logo_2020.svg.png?20221110153201"
                  logoName="TypeScript"
                />
                <Box
                  logo="data:image/png;base64,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"
                  logoName="TailwindCSS"
                />
                <Box
                  logo="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 256 256' className='h-6 w-6'%3E%3Crect width='256' height='256' fill='none'%3E%3C/rect%3E%3Cline x1='208' y1='128' x2='128' y2='208' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='16'%3E%3C/line%3E%3Cline x1='192' y1='40' x2='40' y2='192' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='16'%3E%3C/line%3E%3C/svg%3E"
                  logoName="ShadCN/UI"
                />
                <Box
                  logo="https://cdn.iconscout.com/icon/free/png-256/free-react-1-282599.png"
                  logoName="React"
                />
                <Box
                  logo="https://react-hook-form.com/images/logo/react-hook-form-logo-only.png"
                  logoName="React Hook Form"
                />


                <Box
                  logo="data:image/png;base64,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"
                  logoName="Drizzle ORM"
                />
                <Box
                  logo="https://files.pixijs.download/branding/pixijs-logo-full-light.png"
                  logoName="Pixi.js"
                />
                <Box
                  logo="https://web.archive.org/web/20220327093223im_/https://uploads-ssl.webflow.com/61ef53b38ff5acac3977a683/61f9d5cc1d417c5bdcf95bd3_VS%20Code.svg"
                  logoName="VS Code"
                />
                <Box
                  logo="https://web.archive.org/web/20220327093223im_/https://uploads-ssl.webflow.com/61ef53b38ff5acac3977a683/61f9d5cc7730861d6e04238a_Figma.svg"
                  logoName="Figma"
                />
                <Box
                  logo="https://web.archive.org/web/20220327093223im_/https://uploads-ssl.webflow.com/61ef53b38ff5acac3977a683/61f9d5cc5ecc257c73815126_HTML5.svg"
                  logoName="HTML5"
                />
                <Box
                  logo="https://web.archive.org/web/20220327093223im_/https://uploads-ssl.webflow.com/61ef53b38ff5acac3977a683/61f9d5cc51565df9553940f7_CSS3.svg"
                  logoName="CSS3"
                />


                <Box
                  logo="https://web.archive.org/web/20220327093223im_/https://uploads-ssl.webflow.com/61ef53b38ff5acac3977a683/61f9d5cca37acc166cff7780_Notion.svg"
                  logoName="Notion"
                />
                <Box
                  logo="https://web.archive.org/web/20220327093223im_/https://uploads-ssl.webflow.com/61ef53b38ff5acac3977a683/61f9d5cbeb83c81b39fa0347_Slack.svg"
                  logoName="Slack"
                />
                <Box
                  logo="https://seeklogo.com/images/R/react-query-logo-1340EA4CE9-seeklogo.com.png"
                  logoName="React Query"
                />
                <Box
                  logo="https://raw.githubusercontent.com/reduxjs/redux/master/logo/logo.png"
                  logoName="Redux"
                />
                <Box
                  logo="https://www.svgrepo.com/show/354397/storybook-icon.svg"
                  logoName="Storybook"
                />
                <Box
                  logo="https://cdn.icon-icons.com/icons2/2699/PNG/512/atlassian_jira_logo_icon_170511.png"
                  logoName="Jira"
                />
              </div>

              <p className="italic text-sm mt-2">And yes, I've used more in the past... such as WordPress(Roots Sage), Laravel, Bootstrap, MaterialUI, Formik, etc... but I'm focusing on the above now - will conider those only if the proejct is fun to work with</p>
            </section>
          </div>
        </div>
        {/* <div className="lg:pl-20">
          <ul role="list">
          <SocialLink href="#" icon={XIcon}>
          Follow on X
          </SocialLink>
          <SocialLink href="#" icon={GitHubIcon} className="mt-4">
          Follow on GitHub
          </SocialLink>
          <SocialLink href="#" icon={LinkedInIcon} className="mt-4">
          Follow on LinkedIn
          </SocialLink>
          <SocialLink href="https://www.instagram.com/aurelianspodarec/" icon={InstagramIcon} className="mt-4">
          Follow on Instagram
          </SocialLink>
          <SocialLink
          href="mailto:aurelianxspodarec@gmail.com"
          icon={MailIcon}
          className="mt-8 border-t border-zinc-100 pt-8 dark:border-zinc-700/40"
          >
          aurelianxspodarec@gmail.com
          </SocialLink>
          </ul>
        </div> */}
      </div >
    </Container >
  )
}
