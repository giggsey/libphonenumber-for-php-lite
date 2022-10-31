<?php

declare(strict_types=1);

namespace libphonenumber;

interface MetadataLoaderInterface
{
    /**
     * @param string $metadataFileName File name (including path) of metadata to load.
     */
    public function loadMetadata(string $metadataFileName): array;
}
