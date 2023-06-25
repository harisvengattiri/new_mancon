<?php

namespace Mancon;

interface AdminInterface {
    public function listCustomers(): array;
    public function addCustomer(Customer $customer): void;
    public function updateCustomer(Customer $customer): void;
    public function deleteCustomer(int $id): void;

    public function listCustomerSites(): array;
    public function addCustomerSite(CustomerSite $site): void;
    public function updateCustomerSite(CustomerSite $site): void;
    public function deleteCustomerSite(int $id): void;

    public function listBannedCustomers(): array;
    public function banCustomer(int $id): void;
    public function liftBannedCustomer(int $id): void;

    public function listCreditApplications(): array;
    public function addCreditApplication(CreditApplication $application): void;
    public function updateCreditApplication(CreditApplication $application): void;
    public function deleteCreditApplication(int $id): void;

    public function listVehicles(): array;
    public function addVehicle(Vehicle $vehicle): void;
    public function updateVehicle(Vehicle $vehicle): void;
    public function deleteVehicle(int $id): void;

    public function listLocationFares(): array;
    public function addLocationFare(LocationFare $fare): void;
    public function updateLocationFare(LocationFare $fare): void;
    public function deleteLocationFare(int $id): void;
}