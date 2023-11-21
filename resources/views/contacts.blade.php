@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>Contacts</h1>
        <div class="contacts-container">
            <div class="contacts-section">
                <div class="contacts-icon">
                    <svg
                        viewBox="0 0 56 56"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-14 h-14 text-white"
                    >
                        <path
                            d="M16.527 50.897c-1.722 0-3.353-.38-4.818-1.06l-7.042 1.496 1.472-7.056a11.435 11.435 0 0 1-1.066-4.834C5.073 33.124 10.194 28 16.515 28s11.443 5.124 11.443 11.443c0 6.318-5.124 11.442-11.443 11.442"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M15.428 28.044A15.457 15.457 0 0 1 14 21.56c0-9.373 8.395-16.893 18.667-16.893 10.271 0 18.666 7.52 18.666 16.893 0 5.54-2.944 10.416-7.464 13.491.002 1.764-.002 4.142-.002 6.639l-7.325-3.608c-1.253.24-2.548.371-3.875.371-1.66 0-3.262-.214-4.798-.583"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M11.19 39.584a.117.117 0 1 1-.166.165.117.117 0 0 1 .165-.165M16.44 39.584a.117.117 0 1 1-.166.165.117.117 0 0 1 .165-.165M21.69 39.584a.117.117 0 1 1-.166.165.117.117 0 0 1 .165-.165"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M32.667 23.436c0-1.533.947-2.364 1.897-3.003.928-.625 1.857-1.44 1.857-2.94a3.753 3.753 0 0 0-3.754-3.754 3.753 3.753 0 0 0-3.755 3.754"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M32.667 29.069a.234.234 0 0 0-.234.233.234.234 0 0 0 .467 0 .234.234 0 0 0-.233-.233"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                </div>
                <div class="contacts-text">
                    The answer to your question may already be in our
                    <a href="help.html" style="color: #7b47ba">Help</a> section
                </div>
            </div>
            <div class="contacts-section">
                <div class="contacts-icon">
                    <svg
                        viewBox="0 0 56 56"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-14 h-14 text-white"
                    >
                        <path
                            d="M48.033 21.821c.637 1.998.966 4.082.976 6.179 0 11.603-9.406 21.009-21.009 21.009S6.991 39.603 6.991 28 16.397 6.991 28 6.991c2.097.01 4.18.339 6.179.976M49.009 9.965l-4.64 4.64-2.977-2.976"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M17.806 25.026a3.44 3.44 0 1 1 6.882 0c0 4.3-6.882 4.3-6.882 9.393h6.882M36.245 34.42V22.775a1.187 1.187 0 0 0-2.195-.635 329.787 329.787 0 0 0-4.44 7.428 1.28 1.28 0 0 0 1.116 1.92h7.468"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                </div>
                <div class="contacts-text">
                    If you still have questions, please contact customer support.<br />
                    We are available 24 hours a day, 7 days a week
                </div>
            </div>
            <div class="contacts-section">
                <div class="contacts-icon">
                    <svg
                        viewBox="0 0 56 56"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-14 h-14 text-white"
                    >
                        <path
                            d="M46.648 28.075c-.019 4.753-1.822 9.499-5.448 13.125-7.29 7.289-19.11 7.289-26.4 0a18.67 18.67 0 0 1-3.187-4.273M9.343 27.697A18.594 18.594 0 0 1 14.8 14.8c7.29-7.289 19.11-7.289 26.4 0a18.67 18.67 0 0 1 3.187 4.273"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M37.224 19.075h8.248v-8.25M18.776 36.925h-8.248v8.25"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                </div>
                <div class="contacts-text">
                    For ticket refunds and other questions, you can call us on our
                    numbers:<br />
                    <a href="#" style="color: #7b47ba">+7 (727) 777-77-77</a> <br />
                    <a href="#" style="color: #7b47ba">+7 (701) 777-77-77</a>
                </div>
            </div>
        </div>
        <div class="contacts-section">
            <div class="contacts-icon">
                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-14 h-14 text-white"
                >
                    <path
                        d="M11 18.003H5.998A3.001 3.001 0 0 1 2.997 15V6.998a3.001 3.001 0 0 1 3-3.001h12.006a3.001 3.001 0 0 1 3.001 3V11"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                    <path
                        d="m20.965 6.613-7.43 4.34a3 3 0 0 1-3.028 0L3.037 6.59"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                    <path
                        clip-rule="evenodd"
                        d="m17.1 20.728 4.111-4.112a1 1 0 0 0 0-1.414l-1.408-1.409a1 1 0 0 0-1.415 0l-4.112 4.112a.94.94 0 0 0-.275.665v1.934a.5.5 0 0 0 .5.5h1.933c.25 0 .489-.1.665-.276v0Z"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                </svg>
            </div>
            <div class="contacts-text">
                And you can also email
                <a href="#" style="color: #7b47ba">email@e-bus.kz</a>
            </div>
        </div>
    </div>
@endsection
