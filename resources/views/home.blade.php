@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <p>You are logged in!</p>


                    @forelse(auth()->user()->getReferrals() as $referral)

                        <p>
                            <strong>Referral Program:</strong> {{ $referral->program->name }}
                        </p>

                        <p>
                            <strong>Referral Link:</strong> <a href="{{ $referral->link }}">{{ $referral->link }}</a>
                        </p>

                        <p>
                            <strong>Number of referred users:</strong> {{ $referral->relationships()->count() }}
                        </p>

                        <h1 class="text-center">
                            <strong>Points earned:</strong><br/> {{ $referral->user->balance }}
                        </h1>

                    @empty
                        No referrals
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
