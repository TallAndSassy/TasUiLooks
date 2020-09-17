<ul class="list-disc">
    <li>
        <x-tas::link-to  href='/' >
            Link to another page in this app
        </x-tas::link-to>
    </li>
    <li><x-tas::link-to  href='/' enum-sandbox="tab">
            Link to another page in this app in a new tab
        </x-tas::link-to></li>
    <li>
        <x-tas::link-to href="https://www.google.com" enum-location="outside">
            Link to Google as outside the app
        </x-tas::link-to>
    </li>
    <li>
        <x-tas::link-to href="https://www.google.com"  enum-sandbox="tab" enum-location="outside">
            Link to Google as outside the app in new tab
        </x-tas::link-to>
    </li>
    <li>
        <x-tas::link-to href="https://www.google.com"  enum-sandbox="download">
            Link to file download
        </x-tas::link-to>
    </li>

    <li>
        <x-tas::link-to href="mailto:jj.github@rohrer.org"  enum-sandbox="program">
            jj.opensEmailProgram@rohrer.org
        </x-tas::link-to>
    </li>
     <li>
        <x-tas::link-to href="#livewirestuff" enum-location="anchor" >
           Go elsewhere on same page
        </x-tas::link-to>
    </li>
     <li>
        <x-tas::link-to href="#livewirestuff" enum-sandbox="touch" >
           Do a no-impact action
        </x-tas::link-to>
    </li>
     <li>
        <x-tas::link-to href="#livewirestuff" enum-sandbox="change" >
           Do an impactful action
        </x-tas::link-to>
    </li>

    <li>
{{--         App\Http\Livewire\TheModalBox::generateLinkToRaiseModal('Open Modal', 'admin/people/FlightInstructorsCreate', 'Flight Instructor',  'Cancel', 'Create')
    </li>

    <li>
        <x-tas::link-to href="/"  enum-sandbox="back">
            Back
        </x-tas::link-to>
    </li>
</ul>
