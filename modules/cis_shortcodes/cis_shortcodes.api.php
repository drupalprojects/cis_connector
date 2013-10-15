<?php

/**
 * This is the basic structure of the Version 1 CIS shortcode.
 * This specification can be added to without much issue
 * hence it is versioned for when newer connotations of data
 * to abstract are required.  Below are some example codes.
 */
/** 
 * Code 1 example
 * API version 1
 * connect to the associated MOOC distribution
 * pull resource (type assumed node) number 12
 * render as an iframe
 */
$code1 = '[cis=v1 bucket=mooc resource=12 render=iframe]';

/** 
 * Code 2 example
 * API version 1
 * connect to the associated CLE distribution
 * pull the node resource tagged as "cool Stuff"
 * render as a link to the item
 */
$code2 = '[cis=v1 bucket=cle type=node tag="cool Stuff" render=link]';

/**
 * Other examples
 */
// default render style is iframe
$code3 = '[cis=v1 bucket=media resource=12]';
// request resource, grab output and embed into content
// this is really only useful for images or non-responsive video
$code4 = '[cis=v1 bucket=icor resource=16 render=embed]';