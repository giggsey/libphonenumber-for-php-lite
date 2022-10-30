<?php

namespace libphonenumber;

class DefaultMetadataLoader implements MetadataLoaderInterface
{
    public function loadMetadata(string $metadataFileName): array
    {
        return include $metadataFileName;
    }
}
