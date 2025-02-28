import { Head } from '@inertiajs/react';
import TestDefaultLayout from '../layouts/test/test-header-layout';
import { Separator } from '@radix-ui/react-separator';

export default function Test() {
    return (
        <TestDefaultLayout>
            <Head title="Test" />
            <Separator className='my-6' />
            <div className='flex h-full'>
                <div className='w-full h-fit bg-red-500'>Test</div>
                <div className='w-full h-fit bg-blue-500'>Test</div>
            </div>
        </TestDefaultLayout>
    );
}
