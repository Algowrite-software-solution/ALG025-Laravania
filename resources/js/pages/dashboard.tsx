import { Button } from '@/components/ui/button';
import { Card, CardContent, CardDescription, CardFooter, CardHeader, CardTitle } from '@/components/ui/card';
import { Carousel, CarouselContent, CarouselItem, CarouselNext, CarouselPrevious } from '@/components/ui/carousel';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from '@/components/ui/select';
import { ScrollArea } from '@/components/ui/scroll-area';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

export default function Dashboard() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />
            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
                <div className="grid auto-rows-min gap-4 md:grid-cols-2 lg:grid-cols-3">
                    <div className="border-sidebar-border/70 dark:border-sidebar-border relative aspect-auto w-full overflow-hidden rounded-xl border p-4">
                        <Card className="w-full">
                            <CardHeader>
                                <CardTitle>Create project</CardTitle>
                                <CardDescription>Deploy your new project in one-click.</CardDescription>
                            </CardHeader>
                            <CardContent>
                                <form>
                                    <div className="grid w-full items-center gap-4">
                                        <div className="flex flex-col space-y-1.5">
                                            <Label htmlFor="name">Name</Label>
                                            <Input id="name" placeholder="Name of your project" />
                                        </div>
                                        <div className="flex flex-col space-y-1.5">
                                            <Label htmlFor="framework">Framework</Label>
                                            <Select>
                                                <SelectTrigger id="framework">
                                                    <SelectValue placeholder="Select" />
                                                </SelectTrigger>
                                                <SelectContent position="popper">
                                                    <SelectItem value="next">Next.js</SelectItem>
                                                    <SelectItem value="sveltekit">SvelteKit</SelectItem>
                                                    <SelectItem value="astro">Astro</SelectItem>
                                                    <SelectItem value="nuxt">Nuxt.js</SelectItem>
                                                </SelectContent>
                                            </Select>
                                        </div>
                                    </div>
                                </form>
                            </CardContent>
                            <CardFooter className="flex justify-between">
                                <Button variant="outline">Cancel</Button>
                                <Button className="cursor-cell">Deploy</Button>
                            </CardFooter>
                        </Card>
                    </div>
                    <div className="border-sidebar-border/70 dark:border-sidebar-border relative aspect-auto w-full overflow-hidden rounded-xl border lg:col-start-2 lg:col-end-4 xl:col-start-2 xl:col-end-3">
                        <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" />
                    </div>
                    <div className="border-sidebar-border/70 dark:border-sidebar-border relative aspect-auto w-full overflow-hidden rounded-xl border lg:col-start-1 lg:col-end-4 xl:col-start-3 xl:col-end-4">
                        <ScrollArea className="h-[300px]">
                            <Carousel className="h-full">
                                <CarouselContent className="flex h-full flex-col gap-4">
                                    <CarouselItem className="h-100 animate-pulse bg-gray-900 px-6 py-3">
                                        <Button>Button</Button>
                                    </CarouselItem>
                                    <CarouselItem className="h-100 animate-pulse bg-gray-900 px-6 py-3">
                                        <Button>Button</Button>
                                    </CarouselItem>
                                    <CarouselItem className="h-100 animate-pulse bg-gray-900 px-6 py-3">
                                        <Button>Button</Button>
                                    </CarouselItem>
                                    <CarouselItem className="h-100 animate-pulse bg-gray-900 px-6 py-3">
                                        <Button>Button</Button>
                                    </CarouselItem>
                                    <CarouselItem className="h-100 animate-pulse bg-gray-900 px-6 py-3">
                                        <Button>Button</Button>
                                    </CarouselItem>
                                    <CarouselItem className="h-100 animate-pulse bg-gray-900 px-6 py-3">
                                        <Button>Button</Button>
                                    </CarouselItem>
                                    <CarouselItem className="h-100 animate-pulse bg-gray-900 px-6 py-3">
                                        <Button>Button</Button>
                                    </CarouselItem>
                                </CarouselContent>
                                <CarouselPrevious />
                                <CarouselNext />
                            </Carousel>
                        </ScrollArea>
                    </div>
                </div>
                <div className="border-sidebar-border/70 dark:border-sidebar-border relative min-h-[100vh] flex-1 rounded-xl border md:min-h-min">
                    <PlaceholderPattern className="absolute inset-0 size-full stroke-neutral-900/20 dark:stroke-neutral-100/20" />
                </div>
            </div>
        </AppLayout>
    );
}
