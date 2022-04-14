<?php

namespace Spatie\Newsletter;
use DB;
class NewsletterList
{
    /** @var string */
    public $name;

    /** @var array */
    public $properties = [];

    public function __construct(string $name, array $properties)
    {
        $this->name = $name;
        $this->properties = $properties;
    }

    public function getId(): string
    {
        $setting=DB::table('settings')->first();
        return $setting->mailchimp_list_id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
