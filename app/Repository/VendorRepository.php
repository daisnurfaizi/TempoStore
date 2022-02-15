<?php

namespace App\Repository;

use App\Models\vendor;
use Illuminate\Support\Facades\DB;
use Throwable;

class VendorRepository
{
    public function save($request)
    {
        DB::beginTransaction();
        try {
            $vendor = vendor::create([
                'vendor_names' => $request->vendor_name
            ]);
            DB::commit();
            return 'success';
        } catch (Throwable $e) {
            DB::rollBack();
            return 500;
        }
    }

    public function delete($request)
    {
        DB::beginTransaction();
        try {
            $vendordelete = vendor::find($request->id)->delete();
            DB::commit();
            return 'success';
        } catch (Throwable $e) {
            DB::rollBack();
            return $e;
        }
    }
}
