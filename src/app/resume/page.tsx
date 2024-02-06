import { type Metadata } from 'next'

import { Card } from '@/components/Card'
import { Section } from '@/components/Section'
import { SimpleLayout } from '@/components/SimpleLayout'
import { Button } from '@/components/Button'
import Image from 'next/image'

import qrCode from '@/images/qr-code-website.png';
import Link from 'next/link'
import { Prose } from '@/components/Prose'

function MailIcon(props: React.ComponentPropsWithoutRef<'svg'>) {
  return (
    <svg
      viewBox="0 0 24 24"
      fill="none"
      strokeWidth="1.5"
      strokeLinecap="round"
      strokeLinejoin="round"
      aria-hidden="true"
      {...props}
    >
      <path
        d="M2.75 7.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z"
        className="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"
      />
      <path
        d="m4 6 6.024 5.479a2.915 2.915 0 0 0 3.952 0L20 6"
        className="stroke-zinc-400 dark:stroke-zinc-500"
      />
    </svg>
  )
}

function BriefcaseIcon(props: React.ComponentPropsWithoutRef<'svg'>) {
  return (
    <svg
      viewBox="0 0 24 24"
      fill="none"
      strokeWidth="1.5"
      strokeLinecap="round"
      strokeLinejoin="round"
      aria-hidden="true"
      {...props}
    >
      <path
        d="M2.75 9.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z"
        className="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"
      />
      <path
        d="M3 14.25h6.249c.484 0 .952-.002 1.316.319l.777.682a.996.996 0 0 0 1.316 0l.777-.682c.364-.32.832-.319 1.316-.319H21M8.75 6.5V4.75a2 2 0 0 1 2-2h2.5a2 2 0 0 1 2 2V6.5"
        className="stroke-zinc-400 dark:stroke-zinc-500"
      />
    </svg>
  )
}

function ArrowDownIcon(props: React.ComponentPropsWithoutRef<'svg'>) {
  return (
    <svg viewBox="0 0 16 16" fill="none" aria-hidden="true" {...props}>
      <path
        d="M4.75 8.75 8 12.25m0 0 3.25-3.5M8 12.25v-8.5"
        strokeWidth="1.5"
        strokeLinecap="round"
        strokeLinejoin="round"
      />
    </svg>
  )
}


interface Role {
  company: string
  title: string
  // logo: ImageProps['src']
  start: string | { label: string; dateTime: string }
  end: string | { label: string; dateTime: string }
}

function Role({ role }: { role: Role }) {
  let startLabel =
    typeof role.start === 'string' ? role.start : role.start.label
  let startDate =
    typeof role.start === 'string' ? role.start : role.start.dateTime

  let endLabel = typeof role.end === 'string' ? role.end : role.end.label
  let endDate = typeof role.end === 'string' ? role.end : role.end.dateTime

  return (
    <li className="flex gap-4">
      <div className="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
        <Image src={role.logo} alt="" className="h-7 w-7" unoptimized />
      </div>
      <dl className="flex flex-auto flex-wrap gap-x-2">
        <dt className="sr-only">Company</dt>
        <dd className="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">
          {role.company}
        </dd>
        <dt className="sr-only">Role</dt>
        <dd className="text-xs text-zinc-500 dark:text-zinc-400">
          {role.title}
        </dd>
        <dt className="sr-only">Date</dt>
        <dd
          className="ml-auto text-xs text-zinc-400 dark:text-zinc-500"
          aria-label={`${startLabel} until ${endLabel}`}
        >
          <time dateTime={startDate}>{startLabel}</time>{' '}
          <span aria-hidden="true">—</span>{' '}
          <time dateTime={endDate}>{endLabel}</time>
        </dd>
      </dl>
    </li>
  )
}


function Resume() {
  let resume: Array<Role> = [
    {
      company: 'Planetaria',
      title: 'CEO',
      // logo: logoPlanetaria,
      start: '2019',
      end: {
        label: 'Present',
        dateTime: new Date().getFullYear().toString(),
      },
    },
    {
      company: 'Airbnb',
      title: 'Product Designer',
      // logo: logoAirbnb,
      start: '2014',
      end: '2019',
    },
    {
      company: 'Facebook',
      title: 'iOS Software Engineer',
      // logo: logoFacebook,
      start: '2011',
      end: '2014',
    },
    {
      company: 'Starbucks',
      title: 'Shift Supervisor',
      // logo: logoStarbucks, 
      start: '2008',
      end: '2011',
    },
  ]

  return (
    <div className="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
      <h2 className="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100">
        <BriefcaseIcon className="h-6 w-6 flex-none" />
        <span className="ml-3">Work</span>
      </h2>
      <ol className="mt-6 space-y-4">
        {resume.map((role, roleIndex) => (
          <Role key={roleIndex} role={role} />
        ))}
      </ol>
      <Button href="#" variant="secondary" className="group mt-6 w-full">
        Download CV
        <ArrowDownIcon className="h-4 w-4 stroke-zinc-400 transition group-active:stroke-zinc-600 dark:group-hover:stroke-zinc-50 dark:group-active:stroke-zinc-50" />
      </Button>
    </div>
  )
}



export const metadata: Metadata = {
  title: 'Speaking',
  description:
    'I’ve spoken at events all around the world and been interviewed for many podcasts.',
}

function CVHeader({ title, subTitle, link }: any) {
  return (
    <header className="flex justify-between items-center">
      <div>
        {title && <h2 className="">{title}</h2>}
        {subTitle && <span>{subTitle}</span>}
      </div>
      <div>
        {link && <Link href={link}>{link}</Link>}
      </div>
    </header>
  )
}

function CVSection({ children }: any) {
  return (
    <section className="mb-8">
      {children}
    </section>
  )
}

export default function Speaking() {
  return (
    <div className="mx-auto max-w-screen-lg">
      <Prose>
        <header className="flex justify-between items-center mb-8">
          <div className="flex items-center">
            <Image src={qrCode} className="w-20 h-20" unoptimized />
            <div>
              <h1 className="text-2xl font-semibold">Aurelian Spodarec</h1>
              <span>React/NextJS, JavaSctipt Software Engeener</span>
            </div>
          </div>

          <div className="flex flex-col text-right">
            <span>AurelianXSpodarec@gmail.com</span>
            <span>AurelianSpodarec.co.uk</span>
            <span>07751022563</span>
          </div>
        </header>

        <CVSection>
          <CVHeader title="Experience" link="https://TailBuilder.com" />
          <div>
            <p>A no-code TailwindCSS page builder (Webflow alike) that lets you quickly design pages by drag and drop pre-coded HTML/TailwindCSS sections or components and composing them with each other, which you can then export to your own codebase.</p>
            <p>Used TypeScript, React/NextJS, ContextAPI/Redux, and inter-frame communication to implement complex functionality across separate, isolated rendering environments within the same application. </p>
            <p>Due to the sheer amount of DOM modifications, I’ve created a DOM Helper library which helps manage the codebase. It helps with modifying the iFrame DOM elements that are not accessible via React while keeping the library maintainable and reusable.</p>
            <p>To keep the app organized, certain conventions were used for the naming and folder structure to avoid confusion as well as ATOMIC Design principles were used.</p>
            <p>Researched and analyzed similar apps, aiming to design a UI/UX which takes into account the strengths and weaknesses of existing products to create something better.</p>
          </div>
        </CVSection>

        <CVSection>
          <CVHeader title="Other Experience" />
          <div>
            <p>Worked on numerous brochure websites using HTML, CSS/Scss, TailwindCSS, and WordPress — in some projects I’ve used roots sage using the blade engine that Laravel provides, to achieve a modern workflow and a maintainable project codebase. </p>
            <ol className="list-disc ml-4">
              <li>Contributed to various meetings and discussions, while providing technical insight into the website; communicated with stakeholders</li>
              <li>Gave training to staff on hand-off on how to utilize the CMS and provided support</li>
              <li>Reduced cost of managing the website by implementing a component library that can be reused by the editor to form different layouts with custom data </li>
              <li>Collaborated with designers and converted Figma and Adobe XD to front-end</li>
            </ol>
          </div>

          <div>
            <CVHeader title="Meakid" link="https://MeaKid.com" />
            <div>
              <p>Built and designed an e-commerce store selling fabrics in the UK. Used NextJS and wrote headless API from scratch with WordPress using WooCommerce. </p>
              <ol className="list-disc ml-4">
                <li>Implemented PayPal checkout to handle user payments </li>
                <li>Used SSR to speed up loading time and improve SEO </li>
                <li>Optimized images to decrease the loading time of the site </li>
                <li>Built a custom restful API with PHP using WordPress</li>
              </ol>
            </div>
          </div>


          <div>
            <CVHeader title="TweetCrafter" link="https://tweetcrafter.com/editor" />
            <CVHeader title="Luavel" link="https://luavel.com/docs/reference/global-objects/table/" />
          </div>
        </CVSection>

      </Prose>
    </div>
  )
}
