@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="help-container">
            <div class="back-button" style="font-size: 20px; margin-bottom: 20px">
                <a href="{{ route('main.index') }}">< Back</a>
            </div>
            <div class="help-section">
                <h1>Help</h1>
                <div class="help-li">
                    <div class="help-li-head">How do I geta refund?</div>
                    <div class="help-li-text">
                        Refund is not available at the moment
                    </div>
                </div>
                <div class="help-li">
                    <div class="help-li-head">Do I need to print a ticket?</div>
                    <div class="help-li-text">
                        The electronic travel document (ticket) with electronic
                        registration is not necessary (according to the Rules of
                        transportation of passengers, baggage, cargo and mail by rail, the
                        ticket can be presented on an electronic carrier).
                    </div>
                </div>
                <div class="help-li">
                    <div class="help-li-head">How can I pay for a ticket?</div>
                    <div class="help-li-text">
                        By card of any bank (Visa, Mastercard, American Express, Unionpay)
                    </div>
                </div>
                <div class="help-li">
                    <div class="help-li-head">How long does the reservation last?</div>
                    <div class="help-li-text">
                        You are given 20 minutes to pay for your reservation.
                    </div>
                </div>
                <div class="help-li">
                    <div class="help-li-head">
                        Is it possible to change the date on the ticket?
                    </div>
                    <div class="help-li-text">
                        No. It is necessary to make a refund and buy a new ticket.
                    </div>
                </div>
                <div class="help-li">
                    <div class="help-li-head">
                        What should I do if there is a mistake in the full name?
                    </div>
                    <div class="help-li-text">
                        It is necessary to make a refund and issue new tickets.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
