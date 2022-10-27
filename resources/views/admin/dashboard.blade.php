@extends('layouts.master')

@section('tittle')

DASHBOARD NI KELLY
    
@endsection

@section('content')



<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">SUPPLY INVENTORY</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ITEM NAME
                </th>
                <th>
                  ITEM SELLER
                </th>
                <th>
                  AVAILABLE STOCK
                </th>
                <th class="text-right">
                  ITEM PRICE
                </th>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> 

@endsection

@section('scripts')

@endsection