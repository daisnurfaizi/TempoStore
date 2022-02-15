<?php

namespace App\Http\Livewire;

use App\Models\Product_details;
use Livewire\Component;

class Products extends Component
{

    public
        $products, $product,
        $product_id,
        $category_id,
        $vendor_id,
        $color,
        $size,
        $description,
        $harga_perunit,
        $margin,
        $harga_jual,
        $qty_item;

    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields()
    {
        $this->color = '';
        $this->size = '';
        $this->description = '';
        $this->harga_perunit = '';
        $this->margin = '';
        $this->harga_jual = '';
        $this->qty_item = '';
    }

    public function store()
    {
        $validatedDate = $this->validate(
            [
                'color.0' => 'required',
                'size.0' => 'required',
                'description.0' => 'required',
                'harga_perunit.0' => 'required',
                'margin.0' => 'required',
                'harga_jual.0' => 'required',
                'qty_item.0' => 'required',
                'color.*' => 'required',
                'size.*' => 'required',
                'description.*' => 'required',
                'harga_perunit.*' => 'required',
                'margin.*' => 'required',
                'harga_jual.*' => 'required',
                'qty_item.*' => 'required',
            ],
            [
                'color.0.required' => 'color is required',
                'size.0.required' => 'size is required',
                'description.0.required' => 'description is required',
                'harga_perunit.0.required' => 'harga perunit is required',
                'margin.0.required' => 'margin is required',
                'harga_jual.0.required' => 'harga jual is required',
                'qty_item.0.required' => 'qty item is required',
                'color.*.required' => 'color is required',
                'size.*.required' => 'size is required',
                'description.*.required' => 'description is required',
                'harga_perunit.*.required' => 'harga perunit is required',
                'margin.*.required' => 'margin is required',
                'harga_jual.*.required' => 'harga jual is required',
                'qty_item.*.required' => 'qty item is required',
            ]
        );

        foreach ($this->product as $key => $value) {

            Product_details::create([
                'product_id' => 1,
                'category_id' => 1,
                'vendor_id' => 1,
                'color' => $this->color[$key],
                'size' => $this->size[$key],
                'description' => $this->description[$key],
                'harga_perunit' => $this->harga_perunit[$key],
                'margin' => $this->margin[$key],
                'harga_jual' => $this->harga_jual[$key],
                'qty_item' => $this->qty_item[$key],
            ]);
            $this->inputs = [];
            $this->resetInputFields();
            session()->flash('Message', 'Produk berhasil di tambahkan');
        }
    }
    public function render()
    {
        $data = Product_details::all();
        return view('livewire.products', ['data' => $data]);
    }
}
