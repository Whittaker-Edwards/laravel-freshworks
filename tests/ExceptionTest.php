<?php

it('throws non guzzle exception as freshworks exception', function () {
    \Whittaker\Freshworks\FreshworksFacade::contacts()->all(1);
})->throws(\Whittaker\Freshworks\Exceptions\FreshworksException::class);

it('throws guzzle exception as freshworks exception with 404 response', function () {
    config()->set('freshworks.domain', 'testing');
    \Whittaker\Freshworks\FreshworksFacade::contacts()->all(1);
})->throws(\Whittaker\Freshworks\Exceptions\FreshworksException::class, 'Client error: `GET https://testing.myfreshworks.com/crm/sales/api/contacts/view/1` resulted in a `404 Not Found` response');

it('throws guzzle exception as freshworks exception with 401 response', function () {
    config()->set('freshworks.domain', 'edgility-au');
    \Whittaker\Freshworks\FreshworksFacade::contacts()->all(1);
})->throws(\Whittaker\Freshworks\Exceptions\FreshworksException::class, "Client error: `GET https://edgility-au.myfreshworks.com/crm/sales/api/contacts/view/1` resulted in a `401 Unauthorized` response:\n{\"login\":\"failed\",\"message\":null}");
