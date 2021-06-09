<div>

    <x-shopper-heading>
        <x-slot name="title">
            {{ __('Collections') }}
        </x-slot>

        <x-slot name="action">
            @if($total > 0)
                @can('add_collections')
                    <div class="flex space-x-3">
                        <span class="shadow-sm rounded-md">
                            <x-shopper-button :link="route('shopper.collections.create')">
                                {{ __('Create') }}
                            </x-shopper-button>
                        </span>
                    </div>
                @endcan
            @endif
        </x-slot>
    </x-shopper-heading>

    @if($total === 0)
        <x-shopper-empty-state
            :title="__('Organize your products into collection categories')"
            :content="__('Create and manage all your collections to help your customers easily find products.')"
            :button="__('Create collection')"
            permission="add_collections"
            :url="route('shopper.collections.create')"
        >
            <div class="flex-shrink-0">
                <svg class="w-auto h-64 lg:h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 230">
                    <style>
                        .st4,.st7,.st9{stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.st4{fill:none;stroke:#263238}.st7,.st9{stroke:#233876}.st7{clip-path:url(#XMLID_3_);fill:#3f83f8}.st9{fill:#fff;stroke-width:.5}.st14{clip-path:url(#XMLID_4_)}.st15,.st16{stroke:#233876;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.st15{stroke-width:.5;fill:none}.st16{fill:#3f83f8}.st18{fill:#263238}.st23{fill:none;stroke:#ff4743;stroke-width:.8321;stroke-linecap:round;stroke-miterlimit:10}.st27{fill:#ff6359}.st32{fill:#7e3af2}.st34{fill:#5850ec}.st36{opacity:.49;fill:#7e3af2}
                    </style>
                    <path d="M152 8.7c-107.2 6-130.2 148.2-94.3 191.7 27.9 33.8 77.6 28.2 103.8-4.9 21.6-27.2 56.6-7.1 85.4-36.5C284.4 120.7 272.3 1.9 152 8.7z" fill="#a4cafe"/>
                    <path d="M152 8.7c-107.2 6-130.2 148.2-94.3 191.7 27.9 33.8 77.6 28.2 103.8-4.9 21.6-27.2 56.6-7.1 85.4-36.5C284.4 120.7 272.3 1.9 152 8.7z" opacity=".7" fill="#fff"/>
                    <defs>
                        <path id="XMLID_150_" d="M270.5 45.1V181c0 .8-.6 1.4-1.4 1.4h-81.5c-.8 0-1.4-.6-1.4-1.4V45.1c0-.8.6-1.4 1.4-1.4H210l.7 2.5h35.1l.7-2.5H269c.9 0 1.5.6 1.5 1.4z"/>
                    </defs>
                    <use xlink:href="#XMLID_150_" overflow="visible" fill="#3f83f8"/>
                    <clipPath id="XMLID_2_">
                        <use xlink:href="#XMLID_150_" overflow="visible"/>
                    </clipPath>
                    <path d="M270.5 56.8v124.1c0 .8-.6 1.4-1.4 1.4h-81.5c-.8 0-1.4-.6-1.4-1.4V56.8h84.3z" opacity=".5" clip-path="url(#XMLID_2_)" fill="#fff"/>
                    <g opacity=".2" clip-path="url(#XMLID_2_)">
                        <path d="M256.2 69.5h-70.1V100h70.1c.9 0 1.6-.7 1.6-1.6V71.1c0-.9-.7-1.6-1.6-1.6zm-7.3 32.5h-62.8v32h62.8c.9 0 1.7-.8 1.7-1.7v-28.6c0-1-.7-1.7-1.7-1.7z"/>
                        <path d="M256.2 133.4h-70.1v30.5h70.1c.9 0 1.6-.7 1.6-1.6V135c0-.9-.7-1.6-1.6-1.6zm1.6 33.6v15.3h-70.2c-.8 0-1.4-.6-1.4-1.4v-15.6h70c.9 0 1.6.8 1.6 1.7zm6.6-95.7v7.8c0 .7-.4 1.3-.9 1.6v101.6h-1.9V80.7c-.6-.3-.9-.9-.9-1.6v-7.8c0-1 .8-1.9 1.9-1.9s1.8.9 1.8 1.9z"/>
                    </g>
                    <use xlink:href="#XMLID_150_" overflow="visible" fill="none" stroke="#233876" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                    <path class="st4" d="M186.2 57h84.3"/>
                    <defs>
                        <path id="XMLID_618_" d="M249 67.2V93c0 .9-.7 1.6-1.6 1.6h-69.2c-.9 0-1.6-.7-1.6-1.6V67.2c0-.9.7-1.6 1.6-1.6h69.2c.9 0 1.6.7 1.6 1.6z"/>
                    </defs>
                    <use xlink:href="#XMLID_618_" overflow="visible" fill="#fff"/>
                    <clipPath id="XMLID_3_">
                        <use xlink:href="#XMLID_618_" overflow="visible"/>
                    </clipPath>
                    <path clip-path="url(#XMLID_3_)" fill="#fff" stroke="#233876" stroke-width=".5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M180.1 69h23.6v22.3h-23.6z"/>
                    <path d="M229.8 70.9h-21.1c-.5 0-1-.4-1-1 0-.5.4-1 1-1h21.1c.5 0 1 .4 1 1s-.4 1-1 1zm-12.4 4.4h-8.7c-.5 0-1-.4-1-1 0-.5.4-1 1-1h8.7c.5 0 1 .4 1 1 0 .5-.4 1-1 1z" clip-path="url(#XMLID_3_)" fill="#263238"/>
                    <path class="st7" d="M235.5 86.1c-1.1-.3-1.7.3-2 .7-.3-.4-.9-1.1-2-.8-1.1.3-1.6 1.8-.6 3.1.7 1 1.8 1.6 2.4 1.9.1 0 .1.1.2.1s.1-.1.2-.1c.6-.3 1.7-.9 2.4-1.9 1-1.2.6-2.6-.6-3z"/>
                    <g clip-path="url(#XMLID_3_)">
                        <path class="st9" d="M243.7 89.5h-3.5l-.3-3.5h4.2zm-3.7-2.3h4m-3.9 1.1h3.7m-2.6-2.3l.1 3.5m1.5-3.5l-.2 3.5m1.5-3.5l.9-.4m-.3 5.5c0 .2-.2.4-.4.4s-.4-.2-.4-.4.2-.4.4-.4.4.2.4.4zm-4.6 0c0 .2-.2.4-.4.4s-.4-.2-.4-.4.2-.4.4-.4.4.2.4.4zm-.3-1h4.4"/>
                    </g>
                    <path class="st7" d="M185.5 78.5l1.5 8.2h9.6l1.9-8.2s-1.7-1.7-1.6-5.6l-1.2-.4s.3 3.4-3.8 3.4c-4.2 0-4.3-3-4.3-3l-1.2.5c0-.1.7 3.2-.9 5.1z"/>
                    <path class="st7" d="M194.7 79c0-.1-1.1 0-2.2 0l-.6-1.2s-.2.6-.4 1.3c-1.1.1-2.1.1-2.1.1l1.7 1.1c-.3.8-.6 1.7-.7 1.9 0 0 .8-.6 1.8-1.2l1.6 1-.8-1.7c1-.6 1.7-1.2 1.7-1.3z"/>
                    <path d="M245.4 89.5h-68.8V93c0 .9.7 1.6 1.6 1.6H247V91c0-.8-.8-1.5-1.6-1.5z" opacity=".2" clip-path="url(#XMLID_3_)"/>
                    <use xlink:href="#XMLID_618_" overflow="visible" fill="none" stroke="#233876" stroke-width=".5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                    <defs>
                        <path id="XMLID_619_" d="M249 128v25.7c0 .9-.7 1.6-1.6 1.6h-69.2c-.9 0-1.6-.7-1.6-1.6V128c0-.9.7-1.6 1.6-1.6h69.2c.9 0 1.6.7 1.6 1.6z"/>
                    </defs>
                    <use xlink:href="#XMLID_619_" overflow="visible" fill="#fff"/>
                    <clipPath id="XMLID_4_">
                        <use xlink:href="#XMLID_619_" overflow="visible"/>
                    </clipPath>
                    <path clip-path="url(#XMLID_4_)" fill="#fff" stroke="#233876" stroke-width=".5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M180.1 129.8h23.6v22.3h-23.6z"/>
                    <path d="M229.8 131.7h-21.1c-.5 0-1-.4-1-1 0-.5.4-1 1-1h21.1c.5 0 1 .4 1 1s-.4 1-1 1zm-12.4 4.4h-8.7c-.5 0-1-.4-1-1 0-.5.4-1 1-1h8.7c.5 0 1 .4 1 1 0 .5-.4 1-1 1z" clip-path="url(#XMLID_4_)" fill="#263238"/>
                    <path d="M235.5 146.9c-1.1-.3-1.7.3-2 .7-.3-.4-.9-1.1-2-.8-1.1.3-1.6 1.8-.6 3.1.7 1 1.8 1.6 2.4 1.9.1 0 .1.1.2.1s.1-.1.2-.1c.6-.3 1.7-.9 2.4-1.9 1-1.2.6-2.6-.6-3z" clip-path="url(#XMLID_4_)" fill="#3f83f8" stroke="#233876" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                    <g class="st14">
                        <path class="st9" d="M243.7 150.3h-3.5l-.3-3.5h4.2z"/>
                        <path class="st15" d="M240 148h4m-3.9 1.1h3.7m-2.6-2.3l.1 3.5m1.5-3.5l-.2 3.5m1.5-3.5l.9-.3"/>
                        <path class="st9" d="M244.7 152c0 .2-.2.4-.4.4s-.4-.2-.4-.4.2-.4.4-.4c.2-.1.4.1.4.4zm-4.6 0c0 .2-.2.4-.4.4s-.4-.2-.4-.4.2-.4.4-.4c.2-.1.4.1.4.4z"/>
                        <path class="st15" d="M239.8 150.9h4.4"/>
                    </g>
                    <g class="st14">
                        <path class="st9" d="M186.1 147.6v.9h5.5s1.7-2 2.6-1.7c.9.2.8 1.7.8 1.7h1.4l.5-.9-.4-5.1-10.4 5.1z"/>
                        <path class="st16" d="M186.1 147.6h5.2s1.6-1.5 2.9-1.9c1.2-.4 1.6 1.9 1.6 1.9h1.2s1-2.6 1-2.9c0-.3-.9-4.8-.9-7.7 0 0-3.2-.1-3.6.5 0 0-.7-1-1.1-.9 0 0 .4 2 .3 3.6-.2 1.6-2.3 4-4.3 4.8-1.4.5-2 1-2.3 2.6z"/>
                        <path class="st4" d="M193.4 137.5s.1 3.1 0 3.7c-.1.6-2.9 3.7-3.1 3.8m2.3-6.3h1.3m-1.3 1.5l1.3-.2m-1.7 1.2l1.7.2m-2.3.7l1.7.4m-2.4.5l1.3.8"/>
                        <path class="st9" d="M188.3 145s1.6.8 1.6 2.6h-3.8s.3-2 2.2-2.6zm7.9-1.3c0 .4-.3.7-.7.7-.4 0-.7-.3-.7-.7 0-.4.3-.7.7-.7.4 0 .7.3.7.7z"/>
                    </g>
                    <path d="M247 126.4h-68.8c-.9 0-1.6.7-1.6 1.6v9.8h68.8c.9 0 1.6-.7 1.6-1.6v-9.8z" opacity=".2" clip-path="url(#XMLID_4_)"/>
                    <use xlink:href="#XMLID_619_" overflow="visible" fill="none" stroke="#233876" stroke-width=".5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                    <path class="st9" d="M247.4 185.8h-69.2c-.9 0-1.6-.7-1.6-1.6v-25.7c0-.9.7-1.6 1.6-1.6h69.2c.9 0 1.6.7 1.6 1.6v25.7c0 .9-.7 1.6-1.6 1.6z"/>
                    <path class="st9" d="M180.1 160.2h23.6v22.3h-23.6z"/>
                    <path class="st18" d="M229.8 162.2h-21.1c-.5 0-1-.4-1-1 0-.5.4-1 1-1h21.1c.5 0 1 .4 1 1 0 .5-.4 1-1 1zm-12.4 4.3h-8.7c-.5 0-1-.4-1-1 0-.5.4-1 1-1h8.7c.5 0 1 .4 1 1 0 .5-.4 1-1 1z"/>
                    <path class="st16" d="M235.5 177.3c-1.1-.3-1.7.3-2 .7-.3-.4-.9-1.1-2-.8-1.1.3-1.6 1.8-.6 3.1.7 1 1.8 1.6 2.4 1.9.1 0 .1.1.2.1s.1-.1.2-.1c.6-.3 1.7-.9 2.4-1.9 1-1.1.6-2.6-.6-3z"/>
                    <path class="st9" d="M243.7 180.7h-3.5l-.3-3.5h4.2zm-3.7-2.3h4m-3.9 1.1h3.7m-2.6-2.3l.1 3.5m1.5-3.5l-.2 3.5m1.5-3.5l.9-.3m-.3 5.5c0 .2-.2.4-.4.4s-.4-.2-.4-.4.2-.4.4-.4c.2-.1.4.1.4.4zm-4.6 0c0 .2-.2.4-.4.4s-.4-.2-.4-.4.2-.4.4-.4c.2-.1.4.1.4.4zm-.3-1.1h4.4"/>
                    <path class="st4" d="M193.9 167.3s.8-4.4 2.9-2.8c3.4 2.8.7 10.9.7 10.9m-8.1-8.1s-.8-3-2.7-2.9c-1.9.2-3.6 6.3-1.3 11.8m4.5-10.3s.3-1.4 1.7-1.4c1.3 0 1.5 1.4 1.5 1.4"/>
                    <path class="st16" d="M187.5 165.9l8-.1v1.8s3.6 8.1 2.6 9.9c-1 1.8-12.6 2.3-13-.3-.5-2.6 2.6-9.2 2.6-9.2l-.2-2.1z"/>
                    <path class="st4" d="M187.7 168s-.2 3.3 1 3.9c1.2.6 5.6.7 6.2-.3.6-1 .7-4 .7-4m-7.9 5.7s2.6.7 3.8.5c0 0-.3 3.8-.9 3.8-.6 0-3.6.1-3.8-.6s.3-3.1.3-3.1m9.1-.6s-2.1.6-3.6.6c0 0 0 2.8.5 3.4.5.6 3.2.3 3.6-.4.4-.6-.5-2.8-.5-2.8"/>
                    <path class="st4" d="M192.4 171c0 .3-.3.6-.6.6s-.6-.3-.6-.6.3-.6.6-.6.6.2.6.6z"/>
                    <path class="st9" d="M242.9 127.7h-89c-.9 0-1.6-.7-1.6-1.6V92.4c0-.9.7-1.6 1.6-1.6h89c.9 0 1.6.7 1.6 1.6v33.7c.1.9-.7 1.6-1.6 1.6z"/>
                    <path class="st9" d="M156.8 95.1h30v28.3h-30z"/>
                    <path class="st18" d="M220.4 97.6h-27.3c-.6 0-1-.5-1-1v-.4c0-.6.5-1 1-1h27.3c.6 0 1 .5 1 1v.4c0 .5-.4 1-1 1zm-15.8 5.5h-11.5c-.6 0-1-.5-1-1v-.4c0-.6.5-1 1-1h11.5c.6 0 1 .5 1 1v.4c0 .5-.4 1-1 1z"/>
                    <path class="st16" d="M227.4 116.9c-1.3-.4-2.2.4-2.5.9-.4-.5-1.2-1.4-2.5-1-1.5.4-2 2.3-.8 4 .9 1.2 2.3 2.1 3 2.4.1 0 .2.1.2.1.1 0 .1-.1.2-.1.7-.4 2.2-1.2 3-2.4 1.4-1.6.9-3.4-.6-3.9z"/>
                    <path class="st9" d="M237.9 121.2h-4.5l-.4-4.4h5.3zm-4.8-2.9h5.1m-4.9 1.4h4.7m-3.4-2.9l.2 4.4m1.8-4.4l-.1 4.4m1.8-4.4l1.3-.5"/>
                    <circle class="st9" cx="238.5" cy="123.3" r=".6"/>
                    <circle class="st9" cx="232.7" cy="123.3" r=".6"/>
                    <path class="st9" d="M232.8 122h5.7"/>
                    <path class="st16" d="M167.1 99.3h9.3l.2 1.9 7 13.5s-.6 3.4-2.3 2.2c-1.7-1.2-2.6 3-4.8 2-2.3-1-3.5 1.4-6 .7-2.6-.7-3.4-.5-4.7.1-1.3.6-2.5-2.5-3.5-2.3-1.1.2-2.1-1.7-2.1-1.7l6.5-13.7.4-2.7zm.7 1.9h7.7"/>
                    <path class="st18" d="M171.9 100.2c0 .2-.1.3-.3.3-.2 0-.3-.1-.3-.3 0-.2.1-.3.3-.3.2 0 .3.2.3.3z"/>
                    <path class="st4" d="M163.5 115.6s2.3-5.9 2.7-7.3"/>
                    <path class="st9" d="M170.7 114.1c0-2.3.1-4.8.1-4.8l-.1 4.8zm0 1.5zm6.5 1.2c0-.1-2.1-7.6-2.2-8.5m3.7 0c-.3-.6-.5-1.3-.8-1.9m3.5 8.5c-.7-1.7-1.4-3.3-2.1-5m-12.7-2.9l.5-.9"/>
                    <path class="st18" d="M253.7 186.3c-.5 0-.9-.4-.9-.9V68.9c0-.5.4-.9.9-.9s.9.4.9.9v116.5c0 .5-.4.9-.9.9z"/>
                    <path class="st9" d="M253.7 77.1c-1 0-1.9-.8-1.9-1.9v-7.8c0-1 .8-1.9 1.9-1.9 1 0 1.9.8 1.9 1.9v7.8c0 1.1-.9 1.9-1.9 1.9z"/>
                    <text transform="translate(218.478 53.983)" font-size="6.618" font-family="BebasNeue" opacity=".6">
                        WISHLIST
                    </text>
                    <path d="M146.2 150.5c2.7-.7 4.5-3.3 5-7.2 0-.2.3-.2.3 0 .5 3.9 2.3 6.5 5 7.2.2 0 .2.4 0 .4-2.7.7-4.5 3.3-5 7.2 0 .2-.3.2-.3 0-.5-3.9-2.3-6.5-5-7.2-.2 0-.2-.3 0-.4zm-91.1 20.9c2.7-.7 4.5-3.3 5-7.2 0-.2.3-.2.3 0 .5 3.9 2.3 6.5 5 7.2.2 0 .2.4 0 .4-2.7.7-4.5 3.3-5 7.2 0 .2-.3.2-.3 0-.5-3.9-2.3-6.5-5-7.2-.1 0-.1-.3 0-.4zm11.6 10.8c1.6-.4 2.6-1.9 2.9-4.2 0-.1.2-.1.2 0 .3 2.3 1.3 3.8 2.9 4.2.1 0 .1.2 0 .2-1.6.4-2.6 1.9-2.9 4.2 0 .1-.2.1-.2 0-.3-2.3-1.3-3.8-2.9-4.2-.1 0-.1-.2 0-.2z" fill="#fff"/>
                    <path class="st23" d="M109.2 120.2c0-1.7.3-3.9.3-4.1.6-4.3 1.3-12.2 10.4-9.5 12.5 3.7.5 17.3.5 17.3"/>
                    <path fill="#c98e9f" d="M127.4 173.8l-9.7-1.3 4.7-4.5 4.8-1z"/>
                    <path d="M92.2 116.8l37.4 10.6-11.2 51.4s-23.7 1.6-45.5-19.4c-.2.2 19.3-42.6 19.3-42.6z" fill="#ffd7e2"/>
                    <path fill="#f4abc0" d="M134.6 124.9l-7.2 48.9-2.5-3.8-6.5 8.8 11.2-51.4z"/>
                    <path class="st27" d="M105.9 124.8c-.1-.4-.3-.7-.6-1-.1-.1-.3-.2-.4-.3-.3-.2-.7-.3-1.1-.3-.3 0-.6.1-.8.2-.3.1-.5.2-.7.4-.2.2-.4.4-.4.7-.1.3-.2.5-.2.8l.1.6c.1.4.3.7.6 1 .1.1.3.2.4.3.3.2.7.3 1.1.3.3 0 .6-.1.8-.2.3-.1.5-.2.7-.4.2-.2.4-.4.4-.7.1-.3.2-.5.2-.8l-.1-.6zm10.6 3.2c-.1-.1-.2-.3-.3-.4-.2-.2-.4-.4-.7-.5-.2-.1-.4-.1-.5-.1-.3-.1-.6-.1-.9 0-.2.1-.3.1-.5.2-.1.1-.3.2-.2.2l-.2.2c-.1.1-.2.3-.3.4-.2.3-.3.7-.3 1 0 .2 0 .4.1.6.1.4.3.7.6 1 .2.2.3.3.4.3.2.1.3.2.5.2.4.1.8.1 1.1 0 .4-.1.7-.3.9-.6.3-.3.5-.6.6-.9.1-.2.1-.4.1-.6-.1-.1-.2-.7-.4-1z"/>
                    <path class="st23" d="M104.6 124.1s-.2-19.4 11.2-14.9c11.3 4.5-.7 19.6-.7 19.6"/>
                    <path fill="#ff413d" d="M102.9 115.3l-10.7 1.5 10.1 2.8.7-4.2z"/>
                    <path class="st27" d="M103 115.4l-.7 4.3 4.5 1.3c0-.2.1-.3.2-.5.1-.3.2-.5.4-.7.2-.2.4-.4.7-.4.3-.1.5-.2.8-.2.4 0 .8.1 1.1.3.1.1.3.2.4.3.3.3.5.6.6 1l.1.6c0 .3-.1.6-.2.8l6.8 1.9v-.1c.1-.1.2-.3.3-.4l.2-.2.2-.2c.2-.1.3-.1.5-.2.3-.1.6-.1.9 0 .2 0 .4.1.5.1.3.1.5.2.7.5.1.1.2.3.3.4.2.3.3.8.3 1.1v.2l7.8 2.2 5-2.5-31.4-9.6zm-5.7 23h-.1c-.1 0-.2 0-.3.1h-.1c-.1 0-.2.1-.3.1-.2.1-.4.3-.7.4-.2.2-.5.3-.7.5-.1.1-.2.2-.3.2-.1.1-.2.2-.3.4-.1.2-.1.5 0 .6.1.2.4.3.6.2.3-.1.5-.3.7-.4.3-.2.5-.4.7-.5.2-.2.4-.3.6-.5l.2-.2v-.1c.1-.1.2-.3.2-.4.1-.2 0-.4-.2-.4zm18.4 1.9c-.1-.1-.1-.2-.2-.3-.2-.3-.5-.5-.8-.7-.5-.3-1-.6-1.6-.7-.2 0-.5 0-.6.3-.1.2 0 .5.2.6.2.1.5.2.7.4.1.1.2.1.3.2l.1.1.1.1c.2.2.4.3.6.5.1.1.2.2.3.2.1.1.2.2.3.2h.2c.2 0 .4-.1.5-.3v-.2c0-.1 0-.2-.1-.4zm-3.9 9c-.2-.1-.3-.1-.5 0-.1.1-.3.1-.4.2-.1.1-.3.2-.4.3-.1.1-.2.1-.3.2-.4.4-.6.9-.8 1.4 0 .1 0 .3.1.4.1.1.2.2.3.2.2.1.6 0 .7-.2.1-.2.2-.4.4-.6.1-.1.2-.2.2-.3l.3-.3.3-.3.2-.2c.1-.1.1-.2.1-.3.1-.3 0-.5-.2-.5zm-6.1-14.2v-.6c0-.1-.1-.3-.2-.4-.1-.1-.3-.2-.4-.2-.3 0-.5.2-.6.6v1c0 .2.1.4.2.6.1.1.2.2.4.2.1 0 .3-.1.4-.2.1-.1.2-.3.2-.5v-.5zm-8.9-8.7h-.4s-.1 0 0 0h-.2c-.1 0-.2 0-.3.1-.3.1-.6.2-.9.4-.3.1-.5.3-.8.4-.3.2-.5.4-.8.6-.2.2-.2.5 0 .6.2.2.4.2.6.1.3-.1.5-.3.8-.4.3-.2.5-.3.8-.4.3-.1.5-.3.8-.4.1-.1.2-.1.2-.2l.1-.1.3-.3c.2-.1.1-.3-.2-.4zm-7.2 26c0-.1-.1-.2-.1-.3-.1-.1-.1-.3-.2-.4l-.5-.8c-.1-.2-.4-.3-.6-.2-.2.1-.3.4-.2.6.2.3.3.5.5.8.1.1.2.3.3.4.1.1.1.2.2.2s.1.1.2.1c.2.1.4 0 .4-.2.1 0 .1-.1 0-.2zm17.8 8h-.4c-.1.1-.3.1-.4.1-.2.1-.5.3-.7.5-.4.3-.7.8-1 1.2-.2.2-.1.6.2.7.3.1.6.1.7-.2l.1-.1c.1-.1.2-.2.2-.3l.5-.5c.2-.1.3-.3.5-.4l.2-.2.1-.1c.1-.1.2-.2.2-.3.1-.1 0-.4-.2-.4zm16.6-28.1c-.1-.2-.1-.3-.2-.5-.1-.3-.2-.7-.4-1-.1-.2-.3-.4-.5-.4s-.5.2-.4.5c0 .3.1.7.1 1 .1.5.1 1.1.5 1.4.1.1.3.2.5.1.1 0 .2-.2.3-.3.2-.1.2-.5.1-.8zm-.8 12.8c-.1 0-.2-.1-.4 0-.1 0-.1.1-.2.1s-.2.1-.3.1c-.1 0-.1.1-.2.1-.3.2-.5.3-.8.5-.2.1-.3.4-.2.6.1.2.4.3.6.2.3-.2.5-.3.8-.5.2-.1.3-.2.5-.3.1 0 .1-.1.2-.2s.1-.2.1-.3c.2-.1.1-.2-.1-.3zm-16.6-.5c0-.1 0-.1 0 0v-.8s0-.1 0 0c0-.2 0-.3-.2-.4-.2-.1-.4 0-.5.1-.1 0-.2.1-.2.2l-.1.1.1-.1c0 .1-.1.1-.1.2-.1.1-.1.3-.1.4v.4c.1.3.2.6.5.7.2.1.4.1.5 0 .2-.1.2-.3.3-.5-.1-.1-.1-.2-.2-.3zm-12.1 16.1c-.2 0-.4-.1-.5 0-.1 0-.3.1-.4.1-.3.1-.6.3-.8.5-.5.3-.9.7-1.3 1.2-.2.2-.2.5 0 .7.2.2.5.2.7 0l.3-.3c.1 0 .1-.1.2-.1.2-.2.4-.3.7-.4.2-.1.5-.3.7-.4.1-.1.2-.1.3-.2.2-.1.2-.2.4-.4.1-.3-.1-.6-.3-.7zm5.5-11.3c0-.1-.1-.2-.1-.3-.1-.1-.1-.2-.2-.2-.1-.1-.2-.2-.3-.2-.1 0-.2-.1-.2-.1-.4-.2-.7-.3-1.1-.3h-.4c-.1.1-.2.2-.2.3-.1.2.1.5.3.6.2 0 .3.1.5.1.1 0 .2.1.2.1s.1 0 .1.1c.1 0 .2.1.3.1.1 0 .2.1.3.1.1 0 .1.1.2.1h.3c.2 0 .4-.3.3-.4zm-12.5-7.6v-.2c0-.1 0-.2-.1-.3-.1-.1-.2-.1-.3-.1-.1 0-.2.1-.3.1-.1 0-.1.1-.2.2v.1c-.2.2-.3.4-.4.6-.2.4-.3.8-.5 1.2-.1.3.1.7.4.8.3.1.7-.1.8-.4.1-.3.2-.5.3-.8 0-.1.1-.2.1-.3.1-.2.2-.4.2-.6v-.3c0 .1 0 0 0 0zm-7.8 13.7c0-.2 0-.3-.1-.5s-.2-.3-.3-.4c-.1 0-.1 0-.2-.1h-.5c-.1 0-.2.1-.2.1-.1.1-.2.3-.2.5v.8-.2.5s0 .1.1.1c0 0 0-.1-.1-.1 0 .1.1.2.2.3l.1.1c.1 0 .2.1.2.1.1 0 .2 0 .3-.1h.1c.1-.1.2-.1.2-.2v-.1s0-.1.1-.1c0-.1.1-.2.1-.3.2-.2.2-.3.2-.4zm35.5 15.6c-.6.4-1 1-1.4 1.6-.3.6-.7 1.2-1 1.7-.2.3-.1.6.2.8.3.2.6.1.8-.2.4-.6.7-1.1 1.1-1.7.2-.3.3-.6.5-.9.1-.2.1-.3.2-.5s.1-.4.1-.6c0-.2-.3-.4-.5-.2zm-9.4-1.8c-.1 0-.1-.1-.2-.1h-.3.1c-.3-.1-.7.1-1 .3-.2.1-.4.2-.6.4-.2.1-.3.4-.2.6.1.2.3.3.5.3.2-.1.4-.1.6-.2.1 0 .3-.1.4-.2.2-.1.3-.2.4-.4l-.1.1.2-.2c0-.1.1-.1.1-.2.2-.2.2-.3.1-.4zm12.9-11.6c0-.1-.1-.2-.1-.3-.1-.1-.2-.1-.3-.1-.2 0-.3.1-.4.2l-.1.1c-.2.1-.3.3-.4.4-.1.1-.1.2-.2.3-.2.4-.4.9-.5 1.3 0 .2 0 .3.1.5.1.1.2.2.4.3.3.1.7-.1.8-.4 0-.2.1-.4.2-.6 0 0 0-.1.1-.1 0-.1.1-.2.1-.3 0-.1.1-.2.1-.3.1-.1.1-.3.2-.4l.1-.1c-.1-.2-.1-.3-.1-.5zm-15.7-2.5c-.1-.1-.2-.2-.4-.3h-1.3c-.3 0-.5.2-.5.5s.2.5.5.5h1.3c.2 0 .3-.1.4-.3 0-.1.1-.2.1-.2 0-.1 0-.2-.1-.2zm-18.6 5.7c0-.4-.1-.8-.1-1.2 0-.2-.2-.4-.4-.4s-.4.2-.4.4l-.1 1.2v.6c0 .1 0 .3.1.4 0 .1.1.2.1.2.1.1.1.4.4.4.2 0 .3-.2.4-.4.1-.1.1-.1.1-.2s.1-.3.1-.4c-.2-.2-.2-.4-.2-.6zm5.9-27.3c-.1-.1-.1-.1-.2-.1h-1c-.1 0-.2.1-.2.1s-.1 0-.1.1c-.1 0-.1.1-.1.1s-.1 0-.1.1c-.2.1-.2.3-.2.5s.2.3.3.4h.1s.1.1.2.1h.8c.1 0 .2-.1.2-.1.1 0 .2-.1.2-.1.1 0 .2-.1.2-.2.1-.1.1-.2.1-.3-.1-.4-.1-.5-.2-.6zm4.2-13.5h-.3c-.1 0-.2 0-.3.1-.1.1-.2.1-.2.2l-.3.3c-.2.2-.3.5-.5.8-.1.1-.1.2 0 .4 0 .1.1.2.2.3.2.1.5.1.6-.2 0-.1.1-.1.2-.2s.2-.3.3-.4l.2-.2.1-.1c.1-.1.1-.2.1-.3l.1-.1c0-.1 0-.1.1-.2 0-.3-.1-.4-.3-.4zm32 16.7c-.1 0-.2-.1-.3-.1h-.1c-.2-.1-.5 0-.8.1-.2.1-.4.1-.6.2-.1.1-.2.1-.3.2l-.2.2c-.1.1-.2.3-.1.5s.2.3.4.3h.7c.2 0 .4-.1.5-.2.2-.1.5-.2.6-.3 0 0 .1 0 .1-.1.1-.1.2-.2.2-.3.2-.2 0-.5-.1-.5zm5.2-2.2s0-.1 0 0c-.1-.2-.2-.3-.3-.4h-.3c-.1 0-.1.1-.2.1-.1.1-.2.2-.2.3 0 .1-.1.2-.1.2-.1.1-.1.2-.1.4v.6c0 .1.1.2.1.2.1 0 .1.1.2.1h.2c.2 0 .4-.1.4-.3v-.1c.1-.1.1-.2.1-.3v-.1c0-.1.1-.2.1-.3 0-.1 0-.2.1-.3v-.1c.1.1.1.1 0 0zm-3.6 15.3c0-.1 0-.2-.1-.3l-.2-.2h-.5c-.1 0-.2.1-.2.1-.1 0-.1.1-.2.1l-.2.2-.1.1c-.1.1-.1.2-.2.3v.4c.1.1.1.2.2.2s.3.1.4 0h.1c.1 0 .2-.1.2-.1.1 0 .1-.1.2-.1l.2-.2c.1-.1.1-.2.2-.3.1 0 .2-.1.2-.2zm-1.6 10.2v-.2c0-.1 0-.2-.1-.3-.1-.1-.2-.1-.3-.1h-.3c-.1 0-.1 0-.2.1h-.1c-.1 0-.2.1-.4.2-.1 0-.1.1-.2.1-.2.1-.3.3-.4.5 0 .1-.1.1-.1.2s-.1.1-.1.2c-.1.2-.2.3-.2.5s0 .3.1.5c.1.1.3.2.5.1.4-.1.7-.4 1-.6.2-.1.3-.3.4-.5 0-.1.1-.1.1-.2.1-.1.1-.3.1-.4.1 0 .2-.1.2-.1zm1.7-4.7v-.2l-.1-.1-.1-.1h-.9c-.1 0-.2 0-.3.1-.1.1-.1.2-.1.3 0 .1 0 .2.1.3.1.1.2.1.3.1h.9l.1-.1s.1 0 .1-.1v-.2zm.6-13.2c0-.1 0-.2-.1-.3-.1-.1-.1-.2-.3-.3-.1-.1-.2-.1-.4-.1h-.1c-.1 0-.2 0-.3.1-.1 0-.2.1-.2.1-.1.1-.1.1-.1.2s-.1.2-.1.3v.2c0 .1.1.2.2.3l.1.1c.1.1.2.1.4.1h.1c.1 0 .2 0 .4-.1.1-.1.2-.1.3-.3.1-.1.1-.2.1-.3zm4.8-14.6c0-.1 0-.1 0 0 0-.1 0-.1 0 0v-.2c0-.1-.1-.2-.1-.2l-.1-.1c-.1 0-.1 0-.2-.1h-.5c-.1 0-.1 0-.2.1-.1 0-.1.1-.2.2 0 0-.1 0-.1.1l-.1.1s-.1.1-.1.2v.3c0 .1.1.2.1.2.1.1.2.1.3.1.1.1.2.1.3.1h.4c.1 0 .1 0 .1-.1.1 0 .1-.1.1-.1l.1-.1.1-.2c.1-.1.1-.2.1-.3zm-17.5 37.6l-.3-.3c-.1 0-.1-.1-.2-.1l-.1-.1c-.2-.1-.5-.2-.7-.3-.4-.1-.9-.2-1.3-.3-.2 0-.4 0-.5.2-.1.2 0 .4.2.5.4.2.9.4 1.3.6.2.1.5.2.7.2h.3c.2 0 .3 0 .4-.1.2.2.3-.1.2-.3zm-17.2 1.1c-.1-.1-.3-.1-.4 0-.1 0-.1.1-.2.1-.1.1-.2.1-.3.2 0 0-.1 0-.1.1-.1.1-.2.1-.3.2-.3.2-.5.5-.7.7l-.7.7c-.1.1-.2.2-.2.3.1-.1 0 0 0 0l-.1.1c-.1.2-.2.3-.3.5-.1.1-.1.3 0 .5.1.1.3.2.4.1.2-.1.4-.1.5-.2.2-.1.3-.2.5-.4.3-.2.5-.5.8-.7.2-.3.5-.5.7-.8.1-.2.2-.3.3-.5.1-.2.2-.3.2-.5.1-.2 0-.3-.1-.4zm-15-18.3c-.1-.1-.3-.1-.4-.1h-.3c-.3 0-.6.1-.8.1-.3.1-.5.2-.8.3-.2.1-.4.2-.6.4-.4.2-.1.8.3.7.2-.1.5-.1.7-.2.2 0 .5-.1.7-.2.2-.1.4-.1.7-.2.1 0 .2-.1.3-.1.2-.1.3-.1.4-.3 0 0 0-.3-.2-.4zm5.3 18.3c-.1 0-.1.1-.2.1h-.2c-.1 0-.1.1-.2.1l-.1.1c-.2.2-.4.4-.5.6-.1.1 0 .3.1.4.2.1.3 0 .4-.1 0-.1.1-.1.1-.2v-.1c.1-.1.2-.2.2-.3l.1-.1.1-.1v-.2l.1-.1c.4 0 .3-.1.1-.1z"/>
                    <path d="M118.4 178.8l9.5-43.9c-1.8-.8-4-.9-5.6.3-2 1.4-2.5 4-3.4 6.2-1.6 3.8-4.6 7.1-8.4 8.8-1.8.9-3.9 1.5-5 3.1-1.3 1.9-.9 4.4-1.1 6.6-.3 4.5-3.6 9.1-8.1 9.5-2.6.2-5.1-.9-7.2-2.4-2.1-1.5-3.9-3.4-5.9-5-2.1-1.7-4.5-3.1-7.1-4-.7-.3-1.5-.5-2.2-.7-.6 1.4-1 2.2-.9 2.2 21.7 20.9 45.4 19.3 45.4 19.3z" opacity=".09" fill="#ff6359"/>
                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="82.093" y1="129.109" x2="116.937" y2="129.109">
                        <stop offset="0" stop-color="#fff"/>
                        <stop offset="1" stop-color="#fff" stop-opacity="0"/>
                    </linearGradient>
                    <path d="M92.2 116.8s-5.1 11.3-10.1 22.2c.5.4 1.1.8 1.6 1.2 3.2 2 8.2 1.8 10.2-1.4 1-1.5 1.1-3.5 2.2-4.9 1.3-1.7 3.7-2.2 5.9-2.1 2.2.1 4.3.6 6.5.4 4.2-.4 8-4 8.4-8.2l-24.7-7.2z" fill="url(#SVGID_1_)"/>
                    <path d="M113.5 45.4l11.6 6.7-3.7 6.3s-12.7-2.9-12.9-3.2c-.2-.4 5-9.8 5-9.8z" fill="#4a1d96"/>
                    <path class="st32" d="M95.9 57.5L78.4 75.8c-.6.7-.7 1.7-.2 2.5C81.4 83 93.1 98 111.4 95.4c.7-.1 1.3-.6 1.6-1.3 1.3-3.9 5.5-16.8 7-21.6.1-.5.8-.4.9.1l.7 4.2 11.2 1.2.3-18c.1-.9-.4-1.8-1.1-2.3l-7.3-5.4s-3.6 4.5-9.8-.6c-3.2-2.6-1.2-6.8-1.2-6.8l-7.8-4.4c-.6-.4-1.4-.4-2.1-.1l-17.6 7.2 3.9 9.6 5-.8c.8-.3 1.3.6.8 1.1z"/>
                    <path class="st32" d="M95.9 57.5L78.4 75.8c-.6.7-.7 1.7-.2 2.5C81.4 83 93.1 98 111.4 95.4c.7-.1 1.3-.6 1.6-1.3 1.3-3.9 5.5-16.8 7-21.6.1-.5.8-.4.9.1l.7 4.2 11.2 1.2.3-18c.1-.9-.4-1.8-1.1-2.3l-7.3-5.4s-3.6 4.5-9.8-.6c-3.2-2.6-1.2-6.8-1.2-6.8l-7.8-4.4c-.6-.4-1.4-.4-2.1-.1l-17.6 7.2 3.9 9.6 5-.8c.8-.3 1.3.6.8 1.1z"/>
                    <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="128.385" y1="-52.592" x2="85.278" y2="-96.591" gradientTransform="rotate(2.144 -3728.57 206.939)">
                        <stop offset="0" stop-color="#fff"/>
                        <stop offset="1" stop-color="#fff" stop-opacity="0"/>
                    </linearGradient>
                    <path d="M113.1 47.5c.1-1.5.6-2.6.6-2.6l-7.8-4.4c-.6-.4-1.4-.4-2.1-.1l-17.6 7.2 3.9 9.6c.8 0 7.8-1.9 5.7.3l-6.7 7.3c17.5 6.5 13.3-10.9 24-17.3z" fill="url(#SVGID_2_)"/>
                    <path class="st34" d="M125.2 50.3c-1.8-1.1-10.9-5.9-11.9-6.2-1.3-.4-1.3 1.1-.2 1.9.8.6 1.8 1.1 2.7 1.6.9.5 1.9 1 2.8 1.5 1.8 1 3.7 2.1 5.5 3 .7.3 1.4.4 1.7-.1.3-.6 0-1.3-.6-1.7z"/>
                    <path d="M129.3 77.6c0-1.4-.2-2.7-.5-4-.8-3.3-2.7-6.4-5.6-8-1.2-.7-2.6-1.1-4-1.3-1.9-.2-3.8 0-5.5.8-1.7.8-3 2.4-3.4 4.2-.3 1.5 0 3 .2 4.6.3 3.3-.6 7.2-4.5 8.2-1.3.3-2.6.2-3.9-.2-3.3-1-5.5-3.5-8-5.8-2.2-2-4.5-3.9-7.3-4.9-1.1-.4-2.2-.6-3.3-.7l-5 5.3c-.6.7-.7 1.7-.2 2.5C81.4 83 93.1 98 111.4 95.4c.7-.1 1.3-.6 1.6-1.3 1.3-3.9 5.5-16.8 7-21.6.1-.5.8-.4.9.1l.7 4.2 7.7.8z" opacity=".15" fill="#7e3af2"/>
                    <path class="st36" d="M123.4 57.1c1.2-.7 2.2-1.5 3.2-2.5.2-.2.4-.3.5-.5l-1.9-1.4-.1.1c-.8.8-1.7 1.6-2.8 2.2-2.1 1.2-4.5 1.4-6.7.3-2.2-1.1-3.5-3.2-3.9-5.5-.2-1.1-.1-2.3.1-3.4.1-.6.3-1.2.5-1.8 0-.1.1-.2.1-.3l-1.8-1c-.4.5-.6 1.2-.8 1.6-.4 1.1-.6 2.3-.6 3.4-.1 2.3.6 4.5 2 6.3 2.9 3.8 8.1 4.9 12.2 2.5z"/>
                    <path class="st34" d="M125.1 50.4c-.9-.5-1.9-.2-2.4.6-.6.8-1.7 1.5-2.8 1.8-.6.1-1.2.2-1.7 0-.7-.2-1.2-.5-1.8-.9-.5-.4-1.1-.8-1.5-1.5-.3-.5-.5-1-.7-1.5-.2-.6-.2-1.1-.1-1.8v-.2c0-.2.1-.3.1-.5.1-.6.1-1.2-.2-1.8-.3-.5-.8-.7-1.4-.6-2.3.4-2.3 4.2-1.9 5.9.5 2.2 2 4 3.8 5.3 3.7 2.8 8.7 1.2 11.2-2.4.5-.8.2-1.9-.6-2.4z"/>
                    <path class="st36" d="M132.8 75.2c-.6-.1-1.3-.2-1.9-.3-1-.1-2.1-.2-3.2-.3h-3.3c-.6 0-1.1-.1-1.7 0-.6 0-1 .2-1.5.4l.1.8c.4.3.8.5 1.3.5.5.1 1 .1 1.5.2 1.1.1 2.2.3 3.3.4 1 .1 2 .2 3.1.3.7.1 1.5.3 2.2.5l.1-2.5zM91.6 56.9l2.4-.4c-2.3-3.7-4.5-8.7-5.1-10l-1.9.8c3.1 4.7 2.9 6.9 4.6 9.6z"/>
                    <path class="st34" d="M133.2 77.6c-.5-.2-1.1-.2-1.6-.3-.5-.1-.9-.1-1.4-.2-1-.1-2.1-.3-3.1-.4l-3-.3c-.9-.1-2.2-.4-2.9.2-.2.2-.2.6 0 .8.4.4.9.4 1.4.5.5.1.9.1 1.4.2 1 .1 2 .2 3 .4 1 .1 2 .3 3 .4.5.1.9.1 1.4.2.5.1 1.1.2 1.6.2.9-.1 1.1-1.4.2-1.7zM91.9 56.8c-.9-1.8-1.8-3.5-2.6-5.3-.4-.9-.8-1.8-1.3-2.6-.4-.7-1-2.5-2.1-2.2-1.4.4-.2 2.4.2 3.2l1.2 2.7c.8 1.8 1.7 3.6 2.6 5.3.7 1.3 2.7.2 2-1.1z"/>
                </svg>
            </div>
        </x-shopper-empty-state>
    @else
        <div class="mt-6 bg-white dark:bg-gray-800 shadow sm:rounded-md">
            <div class="p-4 sm:p-6 sm:pb-4">
                <div class="relative z-20 flex items-center space-x-4">
                    <x-shopper-input.search label="Search collection" placeholder="Search collection by name" />
                    <div x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false" class="relative inline-block text-left">
                        <div>
                            <span class="rounded-md shadow-sm">
                                <x-shopper-default-button @click="open = !open" type="button" id="options-menu" aria-haspopup="true" aria-expanded="true" x-bind:aria-expanded="open">
                                    {{ __('Type') }}
                                    <x-heroicon-s-chevron-down class="-mr-1 ml-2 h-5 w-5" />
                                </x-shopper-default-button>
                            </span>
                        </div>

                        <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg">
                            <div class="rounded-md bg-white dark:bg-gray-800 shadow-xs">
                                <div class="py-1">
                                    <div class="flex items-center py-2 px-4">
                                        <input wire:model="type" id="type_manual" name="type" type="radio" value="manual" class="form-radio h-4 w-4 text-blue-600 transition duration-150 ease-in-out">
                                        <label for="type_manual" class="cursor-pointer ml-3">
                                            <span class="block text-sm leading-5 font-medium text-gray-700 dark:text-gray-400">{{ __('Manual') }}</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center py-2 px-4">
                                        <input wire:model="type" id="type_auto" name="type" type="radio" value="auto" class="form-radio h-4 w-4 text-blue-600 transition duration-150 ease-in-out">
                                        <label for="type_auto" class="cursor-pointer ml-3">
                                            <span class="block text-sm leading-5 font-medium text-gray-700 dark:text-gray-400">{{ __('Automatic') }}</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="border-t border-gray-100 dark:border-gray-700"></div>
                                <div class="py-1">
                                    <button wire:click="resetTypeFilter" type="button" class="block px-4 py-2 text-sm text-left leading-5 text-gray-500 dark:text-gray-400 hover:text-blue-600">{{ __('Clear') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block">
                <div class="align-middle inline-block min-w-full">
                    <table class="min-w-full">
                        <thead>
                            <tr class="border-t border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-700">
                                <x-shopper-tables.table-head><span class="lg:pl-2">{{ __('Name') }}</span></x-shopper-tables.table-head>
                                <x-shopper-tables.table-head>{{ __('Type') }}</x-shopper-tables.table-head>
                                <x-shopper-tables.table-head>{{ __('Product Conditions') }}</x-shopper-tables.table-head>
                                <x-shopper-tables.table-head class="hidden md:table-cell text-right">{{ __('Published at') }}</x-shopper-tables.table-head>
                                <x-shopper-tables.table-head class="pr-6 text-right" />
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 dark:divide-gray-700" x-max="1">
                            @forelse($collections as $collection)
                                <tr>
                                    <td class="px-6 py-3 max-w-lg whitespace-no-wrap text-sm leading-5 font-medium text-gray-900 dark:text-white">
                                        <div class="flex items-center space-x-3 lg:pl-2">
                                            <div class="flex items-center">
                                                @if($collection->files->count() > 0)
                                                    <img class="h-8 w-8 rounded object-cover object-center" src="{{ $collection->files->first()->file_path }}" alt="">
                                                @else
                                                    <div class="bg-gray-200 flex items-center justify-center h-8 w-8 rounded dark:bg-gray-700">
                                                        <x-heroicon-o-photograph class="w-5 h-5 text-gray-400 dark:txt-gray-500" />
                                                    </div>
                                                @endif
                                                <a href="{{ route('shopper.collections.edit', $collection) }}" class="ml-2 truncate hover:text-gray-700 dark:hover:text-gray-300">
                                                    <span>{{ $collection->name }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 table-cell whitespace-no-wrap text-sm leading-5 text-gray-500 font-medium text-right dark:text-gray-400">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 {{ $collection->type === "auto" ? 'bg-green-100 text-green-800' :  'bg-blue-100 text-blue-800' }}">
                                            <svg class="-ml-1 mr-1.5 h-2 w-2 {{ $collection->type === "auto" ? 'text-green-400' :  'text-blue-400' }}" fill="currentColor" viewBox="0 0 8 8">
                                                <circle cx="4" cy="4" r="3" />
                                            </svg>
                                            {{ $collection->type === "auto" ? __('Automatic') : __('Manual') }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-3 table-cell whitespace-no-wrap text-sm leading-5 text-gray-500 dark:text-gray-400">
                                        @if($collection->rules->isNotEmpty())
                                            {{ ucfirst(strtolower($collection->firstRule())) }}
                                        @endif
                                    </td>
                                    <td class="hidden md:table-cell px-6 py-3 whitespace-no-wrap text-sm leading-5 text-gray-500 text-right dark:text-gray-400">
                                        <time datetime="{{ $collection->published_at->format('Y-m-d') }}" class="capitalize">{{ $collection->published_at->formatLocalized('%d %B, %Y') }}</time>
                                    </td>
                                    <td class="pr-6">
                                        <x-shopper-dropdown customAlignmentClasses="right-12 -bottom-1">
                                            <x-slot name="trigger">
                                                <button id="collection-options-menu-{{ $collection->id }}" aria-has-popup="true" :aria-expanded="open" type="button" class="w-8 h-8 inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-gray-100 dark:focus:bg-gray-700 transition ease-in-out duration-150">
                                                    <x-heroicon-s-dots-vertical class="w-5 h-5" />
                                                </button>
                                            </x-slot>

                                            <x-slot name="content">
                                                <div class="py-1">
                                                    <a href="{{ route('shopper.collections.edit', $collection) }}" class="group flex items-center px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white" role="menuitem">
                                                        <x-heroicon-s-pencil-alt class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" />
                                                        {{ __('Edit') }}
                                                    </a>
                                                </div>
                                                <div class="border-t border-gray-100 dark:border-gray-600"></div>
                                                <div class="py-1">
                                                    <button wire:click="remove({{ $collection->id }})" type="button" class="group flex w-full items-center px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white" role="menuitem">
                                                        <x-heroicon-s-trash class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" />
                                                        {{ __('Delete') }}
                                                    </button>
                                                </div>
                                            </x-slot>
                                        </x-shopper-dropdown>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-3 whitespace-no-wrap text-sm leading-5 font-medium">
                                        <div class="flex justify-center items-center space-x-2">
                                            <x-heroicon-o-collection class="h-8 w-8 text-gray-400" />
                                            <span class="font-medium py-8 text-gray-500 text-xl dark:text-gray-400">{{ __('No collection found') }}...</span>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="px-4 py-3 flex items-center rounded-b-md justify-between border-t border-gray-200 sm:px-6 dark:border-gray-700">
                <div class="flex-1 flex justify-between sm:hidden">
                    {{ $collections->links('shopper::livewire.wire-mobile-pagination-links') }}
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm leading-5 text-gray-700 dark:text-gray-300">
                            {{ __('Showing') }}
                            <span class="font-medium">{{ ($collections->currentPage() - 1) * $collections->perPage() + 1 }}</span>
                            {{ __('to') }}
                            <span class="font-medium">{{ ($collections->currentPage() - 1) * $collections->perPage() + count($collections->items()) }}</span>
                            {{ __('of') }}
                            <span class="font-medium"> {!! $collections->total() !!}</span>
                            {{ __('results') }}
                        </p>
                    </div>
                    {{ $collections->links() }}
                </div>
            </div>
        </div>
    @endif

    <x-shopper-learn-more name="collections" link="#" />

</div>
