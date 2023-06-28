@extends('templates.default')
@section('eventdetailspage')
<main>
    <div class="background">
        <div class="decorate">
            <img src="/assets/images/eventpage/event_1.png" alt="">
            <img src="/assets/images/eventpage/event_2.png" alt="">
        </div>
        <div class="eventpage pt-5">
            <div class="title text-center mt-3">
                <h1>{{ $event->name }}</h1>
            </div>
            <div class="eventdetailspage d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-4">
                        <div class="card w-100 h-100">
                            <img class="card-img-top" src="{{ $event->image }}" alt="">
                            <div class="card-body">
                                <h4 class="card-date">
                                    <img src="/assets/images/icon/calendar.png" alt="">&ensp;
                                    {{ date('d/m/Y', strtotime($event->start_date)) }} -
                                    {{ date('d/m/Y', strtotime($event->end_date)) }}
                                </h4>
                                <h4 class="card-text">{{ $event->location }}</h4>
                                <h4 class="card-price">{{ number_format($event->price, 0, ',', '.') . ' VNĐ' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="content">
                            <span>
                                {{ $event->description }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection