<?php

test('mock function exists')
    ->assertTrue(function_exists('mock'));

test('spy function exists')
    ->assertTrue(function_exists('spy'));

test('namedMock function exists')
    ->assertTrue(function_exists('namedMock'));

test('anyArgs function exists')
    ->assertTrue(function_exists('anyArgs'));

test('andAnyOtherArgs function exists')
    ->assertTrue(function_exists('andAnyOtherArgs'));

test('andAnyOthers function exists')
    ->assertTrue(function_exists('andAnyOthers'));
