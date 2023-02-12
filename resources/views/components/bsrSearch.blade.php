<div class="row">
    <div class="col-12">

        <div class="input-group mb-3 p-2 mt-3">
            {{-- section Status --}}

            <button class="btn btn-light px-3 dropdown-toggle border border-2" data-bs-toggle="dropdown" id="list" ">Select Status
          </button>
          <ul class="dropdown-menu dropdown-menu-start">
              <a href="{{ route('buypage') }}" class="dropdown-item" value="buy">BUY</a>
              <a href="{{ route('rentpage') }}" class="dropdown-item"value="rent">RENT</a>
              <a href="{{ route('sellpage') }}" class="dropdown-item"value="sell">SELL</a>
          </ul>
          {{-- section baths --}}
          <select class="btn btn bg-light text-center border border-2" name="" id="bath">
              <option selected  value="0">Baths</option>
              <option  value="1">1</option>
              <option  value="2">2</option>
              <option  value="3">3</option>
          </select>
          {{-- section beds --}}
              <select class="btn btn bg-light text-center border border-2" name="" id="bed">
              <option selected value="0">Beds</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
          </select>
          {{-- section Seach --}}
          <input type="text" class="form-control py-2 bg-light text-center" placeholder="Search..."
              id="input-search" />
      </div>
  </div>
</div>
