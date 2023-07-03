<?php

namespace Mancon;

use Mancon\Exceptions\SystemErrorException;
use Mancon\Exceptions\AlreadyExistsException;
use Mancon\Exceptions\StringTypeMismatchException;
use Mancon\Exceptions\IntTypeMismatchException;

class Admin implements AdminInterface {

    private $repository;
    private $Customer;

    public function __construct($repository) {
        $this->repository = $repository;
    }

    public function listCustomers(): array {
        return [];
    }

    public function addCustomer(Customer $customer): void {
        try {
            $this->checkType($customer);
            $this->repository->addCustomer($customer);
        } catch (SystemErrorException $e) {
            throw new SystemErrorException;
        } catch (AlreadyExistsException $e) {
            throw new AlreadyExistsException;
        }
    }

    public function updateCustomer(Customer $customer): void {

    }

    public function deleteCustomer(int $id): void {

    }

    public function listCustomerSites(): array {
        return [];
    }

    public function addCustomerSite(CustomerSite $site): void {

    }

    public function updateCustomerSite(CustomerSite $site): void {

    }

    public function deleteCustomerSite(int $id): void {

    }

    public function listBannedCustomers(): array {
        return [];
    }

    public function banCustomer(int $id): void {

    }

    public function liftBannedCustomer(int $id): void {

    }

    public function listCreditApplications(): array {
        return [];
    }

    public function addCreditApplication(CreditApplication $application): void {

    }

    public function updateCreditApplication(CreditApplication $application): void {

    }

    public function deleteCreditApplication(int $id): void {

    }

    public function listVehicles(): array {
        return [];
    }

    public function addVehicle(Vehicle $vehicle): void {

    }

    public function updateVehicle(Vehicle $vehicle): void {

    }
    public function deleteVehicle(int $id): void {

    }

    public function listLocationFares(): array {
        return [];
    }

    public function addLocationFare(LocationFare $fare): void {

    }

    public function updateLocationFare(LocationFare $fare): void {

    }

    public function deleteLocationFare(int $id): void {

    }

    public function checkType($customer) {
        $name = $customer->getName();
        $phone = $customer->getPhone();
        function checkName($name) {
            if(!is_string($name)) {
                throw new StringTypeMismatchException;
            }
        }
        function checkPhone($phone) {
            if(!is_int($phone)) {
                throw new IntTypeMismatchException;
            }
        }
        checkName($name);
        checkPhone($phone);
    }
}
