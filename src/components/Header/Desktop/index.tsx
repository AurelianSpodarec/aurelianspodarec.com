import clsx from "clsx"
import Link from "next/link"
import { usePathname } from "next/navigation"

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
      <nav {...props}>
        <ul className="
          flex px-3
          text-sm font-medium text-zinc-800
        ">
          <NavItem href="/case-studies">Work</NavItem>
          <NavItem href="/blog">Blog</NavItem>
          <NavItem href="/about">About</NavItem>
          {/* <NavItem href="/resume">Resume</NavItem> */}
          {/* <NavItem href="/community">Community</NavItem> */}
        </ul>
      </nav>
    </>
  )
}

export default DesktopNavigation;
