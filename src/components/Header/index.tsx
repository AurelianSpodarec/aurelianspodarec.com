'use client'

import { Fragment, useEffect, useRef, useState } from 'react'
import Link from 'next/link'
import { usePathname } from 'next/navigation'

import { Container } from '@/components/Container'
import DesktopNavigation from './Desktop'
import MobileNavigation from './Mobile'

function Header() {

  return (
    <header className="fixed w-full bg-white z-50 flex flex-none flex-col">
      <div className="top-0 z-10 h-16 flex items-center">

        <Container className="top-[var(--header-top,theme(spacing.6))] w-full">
          <div className="relative flex justify-between gap-4">

            <div className="flex flex-1 justify-end md:justify-center">
              <MobileNavigation className="pointer-events-auto md:hidden" />
              <DesktopNavigation className="pointer-events-auto hidden md:block mx-auto" />
            </div>

            <div className="flex justify-end items-center md:flex-1">
              {/* <Link href="">Learn Dev</Link> */}
              <Link href="" className="border-2 rounded-lg border-primary text-primary font-semibold px-2.5 py-1.5">Get in touch</Link>
            </div>

          </div>
        </Container>

      </div>
    </header>
  )
}

export default Header;
