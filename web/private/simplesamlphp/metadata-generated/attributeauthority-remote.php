<?php
/* This file was generated by the metarefresh module at 2020-06-15T18:35:24Z
Do not update it manually as it will get overwritten
*/

$metadata['https://login.ucsc.edu/idp/shibboleth'] = array (
  'protocols' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:1.1:protocol',
    1 => 'urn:oasis:names:tc:SAML:2.0:protocol',
  ),
  'keys' => 
  array (
  ),
  'scope' => 
  array (
  ),
  'tags' => 
  array (
  ),
  'EntityAttributes' => 
  array (
  ),
  'UIInfo' => 
  array (
  ),
  'DiscoHints' => 
  array (
  ),
  'entityid' => 'https://login.ucsc.edu/idp/shibboleth',
  'metadata-set' => 'attributeauthority-remote',
  'AttributeService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' => 'https://login.ucsc.edu:8443/idp/profile/SAML1/SOAP/AttributeQuery',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://login.ucsc.edu:8443/idp/profile/SAML2/SOAP/AttributeQuery',
    ),
  ),
  'AssertionIDRequestService' => 
  array (
  ),
  'NameIDFormat' => 
  array (
  ),
  'metarefresh:src' => 'https://login.ucsc.edu/metadata/idp-metadata.xml',
);

?>