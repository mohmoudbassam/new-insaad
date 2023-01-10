<?php

namespace Database\Seeders\permissions;

class AllPermissions
{
    const Permissions = [
        'dashboard' => [
            "view dashboard",
        ],
        'users'        => [
            "view user",
            "create user",
            "update user",
            "delete user",
        ],
        'roles'        => [
            "view role",
            "create role",
            "update role",
            "delete role",
        ],

        'counts'        => [
            "view count",
            "create count",
            "update count",
            "delete count",
        ],
        'aboutUs' => [
            "view aboutUs",
            "update aboutUs",
        ],

        'services'     => [
            "view services",
            "create services",
            "update services",
            "delete services",
        ],
        'settings'     => [
            "view setting",
            "update setting",
        ],
        'policies'     => [
            "view policy",
            "update policy",
        ],
        'faqs'         => [
            "view faq",
            "create faq",
            "update faq",
            "delete faq",
        ],

        'translation'  => [
            "view translation",
            "update translation",
        ],
        'inbox'        => [
            "view inbox",
        ],

    ];
}
