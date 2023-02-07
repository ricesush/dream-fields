<div class="row">
    <div class="col-12">
        <div class="input-group mb-3 p-2 mt-3">
            <button class="btn btn-light px-3 dropdown-toggle border border-2" data-bs-toggle="dropdown" id="list">Select Status
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <a href="{{ route('buypage') }}" class="dropdown-item" value="buy">BUY</a>
                <a href="{{ route('rentpage') }}" class="dropdown-item" value="rent">RENT</a>
                <a href="{{ route('sellpage') }}" class="dropdown-item" value="sell">SELL</a>
            </ul>
            <button class="btn btn-light px-3 border border-2 dropdown-toggle" type="button" id="baths ">Baths</button>
            <button class="btn btn-light px-3 border border-2 dropdown-toggle" type="button" id="button-addon2 ">Beds</button>
            <input type="text" class="search-focus form-control py-2 bg-light" placeholder="Search..." id="input-search" />
            <button class="btn btn-light px-5" type="button" id="search">Search</button>
        </div>
    </div>
</div>