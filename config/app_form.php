<?php

return [
    'input' => '<input type="{{type}}" name="{{name}}" id="{{name}}" class="form-control" {{attrs}}/>',
    'inputContainer' => '<div class="col-sm-12">{{content}}</div>',
    'label' => '<label for="{{name}}" class="col-sm-4 col-form-label">{{text}}</label>',
    'checkbox' => '<input type="checkbox" class="mt-3" id="{{name}}" name="{{name}}" value="{{value}}" {{attrs}} > ',
    // 'checkbox' => '<div class="col-sm-10 form-check" style="margin-left:1.2em;"><input type="checkbox" class="form-check-input" id="{{name}}" name="{{name}}" value="{{value}}"{{attrs}}><label class="form-check-label" for="{{name}}">{{name}}</label></div>',
    // 'checkboxFormGroup' => '<div class="form-check">{{label}}</div>',
    // 'checkboxWrapper' => '<div>{{input}}</div>',
    'textarea' => '<label for="{{name}}" class="col-sm-4 col-form-label">{{text}}</label><textarea id="{{name}}" class="form-control" name="{{name}}"{{attrs}}>{{value}}</textarea>',
    'select' => '<label for="{{name}}" class="col-sm-4 col-form-label">{{text}}</label><select class="custom-select custom-select-lg" id="{{name}}" name="{{name}}" {{attrs}} >{{content}}</select>',
    'selectMultiple' => '<label for="{{name}}" class="col-sm-4 col-form-label">{{text}}</label><select class="custom-select custom-select-lg" id="{{name}}" name="{{name}}[]" multiple {{attrs}} >{{content}}</select>',
    // 'selectMultiple' => '<label for="{{name}}" class="col-sm-4 col-form-label">{{text}}</label><div class="col-sm-12"><select  class="custom-select custom-select-lg" name="{{name}}[]" multiple {{attrs}}>{{content}}</select></div>',
];

?>
