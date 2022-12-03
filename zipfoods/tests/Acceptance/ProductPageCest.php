<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ProductPageCest
{
 

    // tests
    public function pageLoads(AcceptanceTester $I)
    {
         # Act
         $I->amOnPage('/product?sku=driscolls-strawberries');

         # Assert the correct title is set on the page
         # <title></title>
         $I->seeInTitle('Driscoll’s Strawberries');
 
         # Assert the existence of certain text on the page
         $I->see('Driscoll’s Strawberries');
 
         # Assert the existence of a certain element on the page
         $I->seeElement('.product-thumb');
 
         # Assert the existence of text within a specific element on the page
         $I->see('$4.99', '[test=product-price]');
    }

    public function reviewAProductTest(AcceptanceTester $I)
    {
        $I->amOnPage('/product?sku=driscolls-strawberries');

        $name = 'Bob';
       
        $I->fillField('[test=reviewer-name-input]', $name);

        $review = 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.';
        
        $I->fillField('[test=review-textarea]', $review);

        $I->click('[test=review-submit-button]');

        # confirm we see review confirmation
        $I->seeElement('[test=review-confirmation]');
        
        # Confirm we see review on page
        $I->see($name, '[test=review-name]');

        $I->see($review, '[test=review-content]');
    }
}