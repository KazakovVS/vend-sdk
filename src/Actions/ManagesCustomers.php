<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Customer;
use SimpleSquid\Vend\Resources\TwoDotZero\CustomerCollection;

trait ManagesCustomers
{
    /**
     * Create a new customer.
     * Creates a new customer.
     *
     * @param  array  $body  TODO: Could use CustomerBase object.
     *
     * @return Customer
     */
    public function createCustomer(array $body): Customer
    {
        return $this->createResource(Customer::class, "2.0/customers", $body);
    }

    /**
     * Get a single customer.
     * Returns a single customer with a requested ID.
     *
     * @param  string  $id  Valid customer ID.
     *
     * @return Customer
     */
    public function customer(string $id): Customer
    {
        return $this->single(Customer::class, "2.0/customers/$id");
    }

    /**
     * List customers.
     * Returns a paginated list of customers.
     *
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after  The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before  The upper limit for the version numbers to be included in the response.
     * @param  bool|null  $deleted  Indicates whether deleted items should be included in the response.
     *
     * @return CustomerCollection
     */
    public function customers(
        int $page_size = null,
        int $after = null,
        int $before = null,
        bool $deleted = null
    ): CustomerCollection {
        return $this->collection(CustomerCollection::class, "2.0/customers",
                                 compact('after', 'before', 'page_size', 'deleted'));
    }

    /**
     * Delete a customer.
     * Deletes the customer with the requested ID.
     *
     * @param  string  $id  Valid customer ID.
     *
     * @return bool
     */
    public function deleteCustomer(string $id): bool
    {
        return $this->deleteResource("2.0/customers/$id");
    }

    /**
     * Update a customer.
     * Updates the customer with the requested ID.
     *
     * @param  string  $id  Valid customer ID.
     * @param  array  $body  TODO: Could use CustomerBase object.
     *
     * @return Customer
     */
    public function updateCustomer(string $id, array $body): Customer
    {
        return $this->updateResource(Customer::class, "2.0/customers/$id", $body);
    }

}