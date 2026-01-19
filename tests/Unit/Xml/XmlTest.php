<?php declare(strict_types=1);

use function Berry\Xml\xmlElement;
use function Berry\Xml\xmlRoot;

test('xml element renders correctly', function () {
    expect(xmlElement('foo')->toString())->toBe('<foo></foo>');
});

test('xml element with attributes renders correctly', function () {
    expect(xmlElement('foo')->attr('bar', 'baz')->toString())->toBe('<foo bar="baz"></foo>');
});

test('xml element with children renders correctly', function () {
    expect(xmlElement('foo')->child(xmlElement('bar'))->toString())->toBe('<foo><bar></bar></foo>');
});

test('xml root element renders with declaration', function () {
    expect(xmlRoot('foo')->toString())->toBe('<?xml version="1.0" encoding="UTF-8"?><foo></foo>');
});

test('xml root element with children renders correctly', function () {
    expect(xmlRoot('foo')->child(xmlElement('bar'))->toString())->toBe('<?xml version="1.0" encoding="UTF-8"?><foo><bar></bar></foo>');
});
