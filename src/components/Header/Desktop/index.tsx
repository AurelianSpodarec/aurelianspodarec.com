import clsx from "clsx"
import Link from "next/link"
import { usePathname } from "next/navigation"
import ThemeToggle from "../ThemeToggle"

function NavItem({
  href,
  children,
}: {
  href: string
  children: React.ReactNode
}) {
  let isActive = usePathname() === href

  return (
    <li>
      <Link
        href={href}
        className={clsx(
          'relative block px-3 py-2 transition',
          isActive ?
            'text-primary dark:text-teal-400'
            : 'hover:text-primary dark:hover:text-teal-400',
        )}
      >
        {children}
        {isActive && (
          <span className="absolute inset-x-1 -bottom-px h-px bg-gradient-to-r from-teal-500/0 via-teal-500/40 to-teal-500/0 dark:from-teal-400/0 dark:via-teal-400/40 dark:to-teal-400/0" />
        )}
      </Link>
    </li>
  )
}

function DesktopNavigation(props: React.ComponentPropsWithoutRef<'nav'>) {
  return (
    <>
      <Link href="/" className="font-bold text-3xl">
        Aurelian Spodarec
      </Link>

      <nav {...props} className="mx-auto">
        <ul className="
          flex px-3
          text-sm font-medium text-zinc-800
        ">
          <NavItem href="/">Home</NavItem>
          <NavItem href="/case-studies">Work</NavItem>
          <NavItem href="/services">Services</NavItem>
          <NavItem href="/blog">Blog</NavItem>
          <NavItem href="/about">About</NavItem>
          {/* <NavItem href="/resume">Resume</NavItem> */}
          {/* <NavItem href="/community">Community</NavItem> */}
        </ul>
      </nav>

      <div className="flex">
        <ThemeToggle />
        <Link href="" className="border-2 rounded-xl bg-primary/80 text-black font-semibold px-2.5 py-1.5">Get in touch</Link>
      </div>
    </>
  )
}

export default DesktopNavigation;
