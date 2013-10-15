<?php

/**
 * This is the basic structure of the Version 1 CIS shortcode.
 * This specification can be added to without much issue
 * hence it is versioned for when newer connotations of data
 * to abstract are required.  Below are some example codes.
 */
/*
  [
 		cis={api version} *requried
 		tool={cis tool name} *required
		item={tag or id} *required
		render={iframe or link; default: iframe}
		item_type={tag or id; default: id}
		section={section to query, useful with tag; default: _user _context}
		entity_type={entity type for the id; default: node}
		entity_bundle={bundle for the id; default: NULL}
		render_callback={function to handle values; default: NULL}
	]

*/
/** 
 * Code 1 example
 * API version 1
 * connect to the associated MOOC distribution
 * pull item (type assumed node) number 12
 * render assumed as iframe
 */
$code1 = '[cis=v1 tool=mooc item=12]';

/** 
 * Code 2 example
 * API version 1
 * connect to the associated CLE distribution
 * pull the (assumed node) item tagged as "cool Stuff"
 * render as a link to the item
 * Uses current user context to help calculate the node to deliver
 */
$code2 = '[cis=v1 tool=cle item="cool Stuff" item_type=tag render=link]';

/**
 * Other examples
 */
// default render style is iframe
$code3 = '[cis=v1 tool=media item=12]';
// request item, grab output and embed into content
// this is really only useful for images or non-responsive video
$code4 = '[cis=v1 tool=icor item=16 render=embed]';