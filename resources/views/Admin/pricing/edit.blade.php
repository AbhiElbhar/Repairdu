@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Edit Pricing</h1>
    <form action="{{route('pricing.update',$pricing->id)}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="time_id">Enter package Time</label>
            <select name="time_id" id="" class="form-control">
                @foreach ($time as $value)
                @if ($value->id == $pricing->id)
                <option value="{{$value->id}}">{{$value->time}}</option>
                @endif
                @endforeach
                <option value=""> -- Select Package time -- </option>
                @foreach ($time as $value)
                @if ($value->id == $pricing->id)
                @continue
                @endif
                <option value="{{$value->id}}"> {{$value->time}} </option>
                @endforeach
            </select>
            <span class="text-danger">
                @error('time_id')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="package">Enter Package</label>
            <select name="package" id="" class="form-control">
                @if (!empty($pricing->package))
                <option value="{{$pricing->package}}">{{$pricing->package}}</option> 
                @endif
                <option value=""> -- Select Option -- </option>
                <option value="Basic">Basic</option>
                <option value="Standard">Standard</option>
                <option value="Business Plus">Business Plus</option>
            </select>
            <span class="text-danger">
                @error('package')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="price">Enter Price</label>
            <input type="number" name="price" id="" class="form-control" value="{{$pricing->price}}">
            <span class="text-danger">
                @error('price')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="staff_accounts">Enter Staff Accounts</label>
            <select name="staff_accounts" id="" class="form-control">
                @if (!empty($pricing->staff_accounts))
                <option value="{{$pricing->staff_accounts}}">{{$pricing->staff_accounts}}</option>
                @endif
                <option value=""> -- Select Option -- </option>
                <option value="no">No</option>
                <option value="unlimited">Unlimited</option>
                @for ($i = 1; $i <= 500; $i++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <span class="text-danger">
                @error('staff_accounts')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="contacts_limit">Enter Contacts Limit</label>
            <select name="contacts_limit" id="" class="form-control">
                @if (!empty($pricing->contacts_limit))
                <option value="{{$pricing->contacts_limit}}">{{$pricing->contacts_limit}}</option>
                @endif
                <option value=""> -- Select Option -- </option>
                <option value="no">No</option>
                <option value="unlimited">Unlimited</option>
                @for ($i = 1; $i <= 500; $i++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <span class="text-danger">
                @error('contacts_limit')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="invoice_limit">Enter Invoice Limit</label>
            <select name="invoice_limit" id="" class="form-control">
                @if (!empty($pricing->invoice_limit))
                <option value="{{$pricing->invoice_limit}}">{{$pricing->invoice_limit}}</option>
                @endif
                <option value=""> -- Select Option -- </option>
                <option value="no">No</option>
                <option value="unlimited">Unlimited</option>
                @for ($i = 1; $i <= 500; $i++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <span class="text-danger">
                @error('invoice_limit')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="quotation_limit">Enter Quotation Limit</label>
            <select name="quotation_limit" id="" class="form-control">
                @if (!empty($pricing->quotation_limit))
                <option value="{{$pricing->quotation_limit}}">{{$pricing->quotation_limit}}</option>
                @endif
                <option value=""> -- Select Option -- </option>
                <option value="no">No</option>
                <option value="unlimited">Unlimited</option>
                @for ($i = 1; $i <= 500; $i++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <span class="text-danger">
                @error('quotation_limit')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="project_management">Enter Project Management</label>
            <select name="project_management" id="" class="form-control">
                @if (!empty($pricing->project_management))
                <option value="{{$pricing->project_management}}">{{$pricing->project_management}}</option>
                @endif
                <option value=""> -- Select Option -- </option>
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
            <span class="text-danger">
                @error('project_management')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="recurring_transaction">Enter Recurring Transaction</label>
            <select name="recurring_transaction" id="" class="form-control">
                @if (!empty($pricing->recurring_transaction))
                <option value="{{$pricing->recurring_transaction}}">{{$pricing->recurring_transaction}}</option>
                @endif
                <option value=""> -- Select Option -- </option>
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
            <span class="text-danger">
                @error('recurring_transaction')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="inventory_module">Enter Inventory Module</label>
            <select name="inventory_module" id="" class="form-control">
                @if (!empty($pricing->inventory_module))
                <option value="{{$pricing->inventory_module}}">{{$pricing->inventory_module}}</option>
                @endif
                <option value=""> -- Select Option -- </option>
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
            <span class="text-danger">
                @error('inventory_module')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="live_chat">Enter Live Chat</label>
            <select name="live_chat" id="" class="form-control">
                @if (!empty($pricing->live_chat))
                <option value="{{$pricing->live_chat}}">{{$pricing->live_chat}}</option>
                @endif
                <option value=""> -- Select Option -- </option>
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
            <span class="text-danger">
                @error('live_chat')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="file_manager">Enter File Manager</label>
            <select name="file_manager" id="" class="form-control">
                @if (!empty($pricing->file_manager))
                <option value="{{$pricing->file_manager}}">{{$pricing->file_manager}}</option>
                @endif
                <option value=""> -- Select Option -- </option>
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
            <span class="text-danger">
                @error('file_manager')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="online_payment">Enter Online Payment</label>
            <select name="online_payment" id="" class="form-control">
                @if (!empty($pricing->online_payment))
                <option value="{{$pricing->online_payment}}">{{$pricing->online_payment}}</option>
                @endif
                <option value=""> -- Select Option -- </option>
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
            <span class="text-danger">
                @error('online_payment')
                {{$message}}
                @enderror
            </span>
        </div>

        <center><button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </center>
    </form>
</div>
    

@endsection