import Heading from '@/components/heading';
import { Button } from '@/components/ui/button';
import { Separator } from '@/components/ui/separator';
import { cn } from '@/lib/utils';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/react';

const sidebarNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        url: '/dashboard',
        icon: null,
    },
    {
        title: 'Settings',
        url: '/settings',
        icon: null,
    },
];

export default function TestDefaultLayout({ children }: { children: React.ReactNode }) {
    const currentPath = window.location.pathname;

    return (
        <div className="h-screen px-4 py-6">
            <Heading title="Test" description="Manage the tests for this application" />

            <div className="bg-accent flex flex-row w-full flex-wrap space-y-8 lg:space-y-0 lg:space-x-12">
                <header className="h-full w-full bg-red-500 h-[6vh]">
                    <nav className="flex h-full flex-col space-y-1 space-x-0">
                        {sidebarNavItems.map((item) => (
                            <Button
                                key={item.url}
                                size="sm"
                                variant="ghost"
                                asChild
                                className={cn('w-full justify-start', {
                                    'bg-muted': currentPath === item.url,
                                })}
                            >
                                <Link href={item.url} prefetch>
                                    {item.title}
                                </Link>
                            </Button>
                        ))}
                    </nav>
                </header>

                <Separator className="my-6 md:hidden" />

                <div className="h-full flex-1 w-full">
                    <section className="h-full max-w-xl space-y-12 w-full">{children}</section>
                </div>
            </div>
        </div>
    );
}
