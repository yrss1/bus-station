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
        <div class="main-section">
            <h1 style="font-size: 20px">
                Why it is better to buy bus tickets on E-BUS
            </h1>
            <div class="why">
                <div class="why-li">
                    <img
                        src="https://aviax.cdn.aviata.me/releases/2023.1.2/assets/static/anywhere.49239dcd.svg"
                    />
                    <p class="main-text">
                        Look for options with a search for "Anywhere"
                    </p>
                    <p>
                        Will show you which day it is more profitable to fly and suggest
                        the best time to travel.
                    </p>
                </div>
                <div class="why">
                    <div class="why-li">
                        <img
                            src="https://aviax.cdn.aviata.me/releases/2023.1.2/assets/static/loan.0a2cfe72.svg"
                        />
                        <p class="main-text">90% refund guarantee on the ticket price</p>
                        <p>Pay 10% and get 90% of the ticket price back</p>
                    </div>
                </div>
                <div class="why">
                    <div class="why-li">
                        <img
                            src="https://aviax.cdn.aviata.me/releases/2023.1.2/assets/static/bonuses.ae183db9.svg"
                        />
                        <p class="main-text">Bonuses for every purchase</p>
                        <p>
                            Get 1% bonus for every order and 3% for promotional offers
                            offers
                        </p>
                    </div>
                </div>
                <div class="why">
                    <div class="why-li">
                        <img
                            src="https://aviax.cdn.aviata.me/releases/2023.1.2/assets/static/tour.e0290d31.svg"
                        />
                        <p class="main-text">Payment via Apple pay and Google pay</p>
                        <p class="just-text">Pay for tickets conveniently in one click</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
