'use client'

import { Fragment, useEffect, useRef, useState } from 'react'
import Link from 'next/link'
import { usePathname } from 'next/navigation'

import { Container } from '@/components/Container'
import DesktopNavigation from './Desktop'
import MobileNavigation from './Mobile'
import ThemeToggle from './ThemeToggle'

function Header() {

  return (
    <header className="fixed w-full bg-white z-50 flex flex-none flex-col">
      <div className="top-0 z-10 h-16 flex items-center">

        {/* <Container className="top-[var(--header-top,theme(spacing.6))] w-full"> */}
        <div className="relative flex justify-between gap-4 w-full px-8">

          <div className="flex flex-1 justify-end md:justify-center">
            <MobileNavigation className="pointer-events-auto md:hidden" />
            <DesktopNavigation className="pointer-events-auto hidden md:block mx-auto" />
          </div>

         

        </div>
        {/* </Container> */}

      </div>
    </header>
  )
}

export default Header;
