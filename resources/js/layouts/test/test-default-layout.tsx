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

            <div className="bg-accent flex h-[86vh] flex-col space-y-8 lg:flex-row lg:space-y-0 lg:space-x-12">
                <aside className="h-full w-full max-w-xl lg:w-48 bg-blue-500">
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
                </aside>

                <Separator className="my-6 md:hidden" />

                <div className="h-full flex-1 p-5 md:max-w-2xl">
                    <section className="h-full max-w-xl space-y-12">{children}</section>
                </div>
            </div>
        </div>
    );
}
