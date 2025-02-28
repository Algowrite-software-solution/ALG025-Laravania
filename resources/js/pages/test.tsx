import { Head } from '@inertiajs/react';
import TestDefaultLayout from '../layouts/test/test-header-layout';
import { Separator } from '@radix-ui/react-separator';
import { AppHeader } from '@/components/app-header';

export default function Test() {
    return (
        <TestDefaultLayout>
            <Separator className='my-6' />
            <div className='flex h-full'>
                <div className='w-full h-fit bg-red-500'>Test</div>
                <div className='w-full h-fit bg-blue-500'>Test</div>
            </div>
        </TestDefaultLayout>
    );
}
