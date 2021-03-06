<?php
return array(
    'photos_album' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'parent_id' => array('int', 11, 'null' => 0, 'default' => '0'),
        'type' => array('int', 1, 'null' => 0, 'default' => '0'),
        'name' => array('varchar', 255, 'null' => 0),
        'note' => array('varchar', 255),
        'description' => array('text'),
        'hash' => array('varchar', 32, 'null' => 0, 'default' => ''),
        'url' => array('varchar', 255),
        'full_url' => array('varchar', 255),
        'status' => array('smallint', 6, 'null' => 0, 'default' => '0'),
        'conditions' => array('text'),
        'create_datetime' => array('datetime', 'null' => 0),
        'contact_id' => array('int', 11, 'null' => 0),
        'thumb' => array('int', 11, 'null' => 0, 'default' => '0'),
        'sort' => array('int', 11, 'null' => 0, 'default' => '0'),
        ':keys' => array(
            'PRIMARY' => 'id',
            'url' => array('parent_id', 'url', 'unique' => 1),
            'full_url' => array('full_url', 'unique' => 1),
        ),
    ),
    'photos_album_count' => array(
        'album_id' => array('int', 11, 'null' => 0),
        'contact_id' => array('int', 11, 'null' => 0),
        'count' => array('int', 11, 'null' => 0),
        ':keys' => array(
            'PRIMARY' => array('album_id', 'contact_id'),
        ),
    ),
    'photos_album_params' => array(
        'album_id' => array('int', 11, 'null' => 0),
        'name' => array('varchar', 255, 'null' => 0),
        'value' => array('text', 'null' => 0),
        ':keys' => array(
            'PRIMARY' => array('album_id', 'name'),
        ),
    ),
    'photos_album_photos' => array(
        'album_id' => array('int', 11, 'null' => 0),
        'photo_id' => array('int', 11, 'null' => 0),
        'sort' => array('int', 11, 'null' => 0, 'default' => '0'),
        ':keys' => array(
            'PRIMARY' => array('album_id', 'photo_id'),
        ),
    ),
    'photos_album_rights' => array(
        'group_id' => array('int', 11, 'null' => 0),
        'album_id' => array('int', 11, 'null' => 0),
        ':keys' => array(
            'PRIMARY' => array('group_id', 'album_id'),
        ),
    ),
    'photos_page' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'parent_id' => array('int', 11),
        'domain' => array('varchar', 255),
        'route' => array('varchar', 255),
        'name' => array('varchar', 255, 'null' => 0),
        'title' => array('varchar', 255, 'null' => 0, 'default' => ''),
        'url' => array('varchar', 255),
        'full_url' => array('varchar', 255),
        'content' => array('text', 'null' => 0),
        'create_datetime' => array('datetime', 'null' => 0),
        'update_datetime' => array('datetime', 'null' => 0),
        'create_contact_id' => array('int', 11, 'null' => 0),
        'sort' => array('int', 11, 'null' => 0, 'default' => '0'),
        'status' => array('tinyint', 1, 'null' => 0, 'default' => '0'),
        ':keys' => array(
            'PRIMARY' => 'id',
        ),
    ),
    'photos_page_params' => array(
        'page_id' => array('int', 11, 'null' => 0),
        'name' => array('varchar', 255, 'null' => 0),
        'value' => array('text', 'null' => 0),
        ':keys' => array(
            'PRIMARY' => array('page_id', 'name'),
        ),
    ),
    'photos_photo' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'name' => array('varchar', 255),
        'description' => array('text'),
        'ext' => array('varchar', 10),
        'size' => array('int', 11),
        'type' => array('varchar', 50),
        'rate' => array('tinyint', 1, 'null' => 0, 'default' => '0'),
        'width' => array('int', 5, 'null' => 0, 'default' => '0'),
        'height' => array('int', 5, 'null' => 0, 'default' => '0'),
        'contact_id' => array('int', 11, 'null' => 0),
        'upload_datetime' => array('datetime', 'null' => 0),
        'edit_datetime' => array('datetime'),
        'status' => array('smallint', 6, 'null' => 0, 'default' => '0'),
        'hash' => array('varchar', 32, 'null' => 0, 'default' => ''),
        'url' => array('varchar', 255),
        'parent_id' => array('int', 11, 'null' => 0, 'default' => '0'),
        'stack_count' => array('int', 11, 'null' => 0, 'default' => '0'),
        'sort' => array('int', 11, 'null' => 0, 'default' => '0'),
        ':keys' => array(
            'PRIMARY' => 'id',
            'url' => array('url', 'unique' => 1),
        ),
    ),
    'photos_photo_exif' => array(
        'photo_id' => array('int', 11, 'null' => 0),
        'name' => array('varchar', 64, 'null' => 0),
        'value' => array('varchar', 255, 'null' => 0),
        ':keys' => array(
            'PRIMARY' => array('photo_id', 'name'),
            'exif' => array('name', 'value'),
        ),
    ),
    'photos_photo_rights' => array(
        'group_id' => array('int', 11, 'null' => 0),
        'photo_id' => array('int', 11, 'null' => 0),
        ':keys' => array(
            'PRIMARY' => array('group_id', 'photo_id'),
        ),
    ),
    'photos_photo_tags' => array(
        'photo_id' => array('int', 11, 'null' => 0),
        'tag_id' => array('int', 11, 'null' => 0),
        ':keys' => array(
            'PRIMARY' => array('photo_id', 'tag_id'),
        ),
    ),
    'photos_tag' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'name' => array('varchar', 255, 'null' => 0),
        'count' => array('int', 11, 'null' => 0, 'default' => '0'),
        ':keys' => array(
            'PRIMARY' => 'id',
            'name' => array('name', 'unique' => 1),
        ),
    ),
);