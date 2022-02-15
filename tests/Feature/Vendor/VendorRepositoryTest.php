<?php

namespace Tests\Feature\Vendor;

use App\Repository\VendorRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VendorRepositoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_saveVendor()
    {
        $object = [
            'vendor_name' => 'Samsung'
        ];
        $vendor = (object) $object;
        $repository = new VendorRepository;
        $result =  $repository->save($vendor);
        $this->assertEquals($result, 'success');
    }

    public function test_deleteVendor()
    {
        $object = [
            'id' => 1
        ];
        $vendor = (object) $object;
        $repository = new VendorRepository;
        $result =  $repository->delete($vendor);
        $this->assertEquals($result, 'success');
    }
}
