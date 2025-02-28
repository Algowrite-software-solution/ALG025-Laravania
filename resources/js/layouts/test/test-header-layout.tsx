import { AppHeader } from '@/components/app-header';
import { Separator } from '@/components/ui/separator';

export default function TestDefaultLayout({ children }: { children: React.ReactNode }) {
    const currentPath = window.location.pathname;

    return (
        <div className="h-screen px-4 py-6">
            <AppHeader />
            <Separator className="my-6 md:hidden" />

            <div className="bg-accent flex w-full flex-row flex-wrap space-y-8 lg:space-y-0 lg:space-x-12">
                <section className="h-full w-full max-w-xl space-y-12">{children}</section>
            </div>
        </div>
    );
}
