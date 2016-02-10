<?php

namespace Tests\Http\Controllers\Backend;

use App\Customer;
use Tests\AbstractTestCase;

class CustomersControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_upload_an_image_for_customer()
    {
        $this->createAndBe();
        $absolutePathToFile = public_path('assets/img/logo.png');
        $uploadPath = '/uploads/customers/acme.png';

        $this->visit('/admin/customers/create')->type('Acme', 'label')->type('May the Force be with you... Always.', 'description')->attach($absolutePathToFile, 'image')->press('Submit');

        $this->seeInDatabase('customers', ['image' => $uploadPath]);
        unlink(public_path($uploadPath));
    }

    /** @test */
    public function it_can_fetch_customers_list()
    {
        $this->createAndBe();

        $this->visit('/admin/customers');
    }

    /** @test */
    public function it_can_create_a_customer()
    {
        $this->createAndBe();

        $this->visit('/admin/customers/create');
    }

    /** @test */
    public function it_has_a_page_showing_a_single_customer()
    {
        $this->createAndBe();
        $customer = factory(Customer::class)->create();

        $this->visit('/admin/customers/'.$customer->id);
        $this->assertViewHas('customer');
    }

    /** @test */
    public function it_can_edit_a_customer()
    {
        $this->createAndBe();

        $customer = factory(Customer::class)->create();
        $this->visit('/admin/customers/'.$customer->id.'/edit');
        $this->assertViewHas('customer');
    }

    /** @test */
    public function it_can_update_a_customer()
    {
        $this->createAndBe();

        $data = ['label' => 'New Title', 'description' => 'New Content'];
        $customer = factory(Customer::class)->create();

        $this->put('/admin/customers/'.$customer->id, $data);
        $this->seeInDatabase('customers', ['label' => $data['label']]);
        $this->assertRedirectedToRoute('admin.customers.index');
    }

    /** @test */
    public function it_can_delete_a_customer()
    {
        $user = $this->createAndBe();

        $data = [
            'label'     => 'Acme',
            'description'   => 'Customer description',
        ];
        $customer = factory(Customer::class)->create($data);

        $this->get('/admin/customers/delete/'.$customer->id);
        $this->notSeeInDatabase('customers', $data);
        $this->assertRedirectedToRoute('admin.customers.index');
    }
}
