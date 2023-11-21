@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="schedule-container-main-page">
            <div class="search-form">
                <div class="from-input">
                    <input type="text" placeholder="From" />
                </div>
                <div class="where-input">
                    <input type="text" placeholder="Where" />
                </div>
                <div class="data">
                    <input type="date" />
                </div>
                <div class="search">
                    <a href="destinations.html" style="color: white"> Search </a>
                </div>
            </div>
        </div>

        <div class="list-of-destinations">
            <div class="dest">
                <div class="rating">
                    <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M10 14.3653L5.14917 16.67L6.15667 11.5688L2.5 7.82792L7.64917 7.18527L10 2.5L12.3508 7.18527L17.5 7.82792L13.8433 11.5688L14.8508 16.67L10 14.3653Z"
                            fill="#F6C13A"
                            stroke="#F6C13A"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M5.14917 16.6667L10 14.3625V8.43125V2.5L7.64917 7.18417L2.5 7.82667L6.15667 11.5667L5.14917 16.6667Z"
                            fill="#F6C13A"
                            stroke="#F6C13A"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                    <p class="main-rating">3.6</p>
                    <p>0009T</p>
                </div>
                <div class="dest-top">
                    <div class="dest-left">
                        <div class="time-start">
                            7:00
                            <p
                                style="
                    color: #83878f;
                    margin-left: 10px;
                    font-size: 15px;
                    font-weight: 400;
                  "
                            >
                                21 oct
                            </p>
                        </div>
                        <div class="place-start">Astana</div>
                    </div>
                    <div class="dest-right">
                        <div class="time-end">
                            12:25
                            <p
                                style="
                    color: #83878f;
                    margin-left: 10px;
                    font-size: 15px;
                    font-weight: 400;
                  "
                            >
                                21 oct
                            </p>
                        </div>
                        <div class="place-end">Almaty</div>
                    </div>
                </div>
                <div class="dest-under">
                    <div class="dest-cost">400tng</div>
                    <div class="continue"><a href="select-seat.html">Continue</a></div>
                </div>
            </div>
            <div class="dest">
                <div class="rating">
                    <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M10 14.3653L5.14917 16.67L6.15667 11.5688L2.5 7.82792L7.64917 7.18527L10 2.5L12.3508 7.18527L17.5 7.82792L13.8433 11.5688L14.8508 16.67L10 14.3653Z"
                            fill="#F6C13A"
                            stroke="#F6C13A"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M5.14917 16.6667L10 14.3625V8.43125V2.5L7.64917 7.18417L2.5 7.82667L6.15667 11.5667L5.14917 16.6667Z"
                            fill="#F6C13A"
                            stroke="#F6C13A"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                    <p class="main-rating">3.6</p>
                    <p>0009T</p>
                </div>
                <div class="dest-top">
                    <div class="dest-left">
                        <div class="time-start">
                            7:00
                            <p
                                style="
                    color: #83878f;
                    margin-left: 10px;
                    font-size: 15px;
                    font-weight: 400;
                  "
                            >
                                21 oct
                            </p>
                        </div>
                        <div class="place-start">Astana</div>
                    </div>
                    <div class="dest-right">
                        <div class="time-end">
                            12:25
                            <p
                                style="
                    color: #83878f;
                    margin-left: 10px;
                    font-size: 15px;
                    font-weight: 400;
                  "
                            >
                                21 oct
                            </p>
                        </div>
                        <div class="place-end">Almaty</div>
                    </div>
                </div>
                <div class="dest-under">
                    <div class="dest-cost">400tng</div>
                    <div class="continue"><a href="select-seat.html">Continue</a></div>
                </div>
            </div>
            <div class="dest">
                <div class="rating">
                    <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M10 14.3653L5.14917 16.67L6.15667 11.5688L2.5 7.82792L7.64917 7.18527L10 2.5L12.3508 7.18527L17.5 7.82792L13.8433 11.5688L14.8508 16.67L10 14.3653Z"
                            fill="#F6C13A"
                            stroke="#F6C13A"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M5.14917 16.6667L10 14.3625V8.43125V2.5L7.64917 7.18417L2.5 7.82667L6.15667 11.5667L5.14917 16.6667Z"
                            fill="#F6C13A"
                            stroke="#F6C13A"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                    <p class="main-rating">3.6</p>
                    <p>0009T</p>
                </div>
                <div class="dest-top">
                    <div class="dest-left">
                        <div class="time-start">
                            7:00
                            <p
                                style="
                    color: #83878f;
                    margin-left: 10px;
                    font-size: 15px;
                    font-weight: 400;
                  "
                            >
                                21 oct
                            </p>
                        </div>
                        <div class="place-start">Astana</div>
                    </div>
                    <div class="dest-right">
                        <div class="time-end">
                            12:25
                            <p
                                style="
                    color: #83878f;
                    margin-left: 10px;
                    font-size: 15px;
                    font-weight: 400;
                  "
                            >
                                21 oct
                            </p>
                        </div>
                        <div class="place-end">Almaty</div>
                    </div>
                </div>
                <div class="dest-under">
                    <div class="dest-cost">400tng</div>
                    <div class="continue"><a href="select-seat.html">Continue</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
