<div>
    <div class="container">
        <div class="row mt-5">
             <h1 class="fs-5 text-center">Dynamic Form with Laravel 8 & Livewire</h1>
        </div>
        <div class="row justify-content-center">
            <div class="w-50">
                <div class="card my-3">
                    <div class="card-body">
                        <form class="g-4">
                            <div class="col-6">
                                <label>Color</label>
                                <input type="text"  class="form-control" wire:model="color.0" placeholder="Masukkan warna">
                                @error('color.0') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-6">
                                <label>Size</label>
                                <input type="text"  class="form-control" wire:model="size.0" placeholder="Masukkan warna">
                                @error('size.0') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-6">
                                <label>Description</label>
                                <input type="text"  class="form-control" wire:model="description.0" placeholder="Masukkan warna">
                                @error('description.0') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-6">
                                <label>Harga Perunit</label>
                                <input type="number"  class="form-control" wire:model="harga_perunit.0" >
                                @error('harga_perunit.0') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-6">
                                <label>Margin</label>
                                <input type="number"  class="form-control" wire:model="margin.0" >
                                @error('margin.0') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-6">
                                <label>Harga Jual</label>
                                <input type="number"  class="form-control" wire:model="harga_jual.0" >
                                @error('harga_jual.0') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-6">
                                <label>Qty</label>
                                <input type="number"  class="form-control" wire:model="qty_item.0" >
                                @error('qty_item.0') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-2">
                                <button class=" btn btn-primary mb-3" wire:click.prevent="add({{$i}})">Tambah Item<i class="bi bi-plus"></i></button>
                            </div>
                            {{-- Add Form --}}
                            @foreach ($inputs as $key => $value)
                            <div class="col-6">
                                <label>Color</label>
                                <input type="text"  class="form-control" wire:model="color." placeholder="Masukkan warna">
                                @error('color.') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-6">
                                <label>Size</label>
                                <input type="text"  class="form-control" wire:model="size." placeholder="Masukkan warna">
                                @error('size.') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-6">
                                <label>Description</label>
                                <input type="text"  class="form-control" wire:model="description." placeholder="Masukkan warna">
                                @error('description.') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-4">
                                <label>Harga Perunit</label>
                                <input type="number"  class="form-control" wire:model="harga_perunit.0" >
                                @error('harga_perunit.0') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-4">
                                <label>Margin</label>
                                <input type="number"  class="form-control" wire:model="margin.0" >
                                @error('margin.0') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-4">
                                <label>Harga Jual</label>
                                <input type="number"  class="form-control" wire:model="harga_jual.0" >
                                @error('harga_jual.0') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-4">
                                <label>Qty</label>
                                <input type="number"  class="form-control" wire:model="qty_item.0" >
                                @error('qty_item.0') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                         
                            <div class="col-2">
                                <button class="btn btn-light mb-3" wire:click.prevent="remove({{$key}})"><i class="bi bi-x"></i></button>
                            </div>
                            @endforeach
                            <div class="row">
                                <div class="col-12 ps-0">
                                     <button type="button" class="btn btn-primary" wire:click.prevent="store()">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                    {{ session('message') }}
                    </div>
                @endif
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Account</th>
                            <th scope="col">Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 0;
                        @endphp
                        @foreach ($data as $data)
                        <tr>
                            <th scope="row">{{ ++$no }}</th>
                            <td>{{ $data->account }}</td>
                            <td>{{ $data->username }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
