<ul class="list-disc">
    <li>
        <x-tas-ui-looks::link-to  href='/' >
            Link to another page in this app
        </x-tas-ui-looks::link-to>
    </li>
    <li><x-tas-ui-looks::link-to  href='/' enum-sandbox="tab">
            Link to another page in this app in a new tab
        </x-tas-ui-looks::link-to></li>
    <li>
        <x-tas-ui-looks::link-to href="https://www.google.com" enum-location="outside">
            Link to Google as outside the app
        </x-tas-ui-looks::link-to>
    </li>
    <li>
        <x-tas-ui-looks::link-to href="https://www.google.com"  enum-sandbox="tab" enum-location="outside">
            Link to Google as outside the app in new tab
        </x-tas-ui-looks::link-to>
    </li>
    <li>
        <x-tas-ui-looks::link-to href="https://www.google.com"  enum-sandbox="download">
            Link to file download
        </x-tas-ui-looks::link-to>
    </li>

    <li>
        <x-tas-ui-looks::link-to href="mailto:jj.github@rohrer.org"  enum-sandbox="program">
            jj.opensEmailProgram@rohrer.org
        </x-tas-ui-looks::link-to>
    </li>
     <li>
        <x-tas-ui-looks::link-to href="#livewirestuff" enum-location="anchor" >
           Go elsewhere on same page
        </x-tas-ui-looks::link-to>
    </li>
     <li>
        <x-tas-ui-looks::link-to href="#livewirestuff" enum-sandbox="touch" >
           Do a no-impact action
        </x-tas-ui-looks::link-to>
    </li>
     <li>
        <x-tas-ui-looks::link-to href="#livewirestuff" enum-sandbox="change" >
           Do an impactful action
        </x-tas-ui-looks::link-to>
    </li>

    <li>
        <x-tas-ui-looks::link-to-modal
            href="something w/o modal">
            Modal Up
        </x-tas-ui-looks::link-to-modal>
{{--         App\Http\Livewire\TheModalBox::generateLinkToRaiseModal('Open Modal', 'admin/people/FlightInstructorsCreate', 'Flight Instructor',  'Cancel', 'Create')--}}
    </li>

    <li>
        <x-tas-ui-looks::link-to href="/"  enum-sandbox="back">
            Back
        </x-tas-ui-looks::link-to>
    </li>
</ul>
