<?php


namespace Office365\OutlookServices;

use Office365\Runtime\Actions\CreateEntityQuery;

class FolderCollection extends OutlookEntityCollection
{

    /**
     * Creates a folder
     * @param string $displayName name of new folder
     * @return MailFolder
     */
    public function createFolder($displayName) {
        $folder = new MailFolder($this->getContext(), $this->getResourcePath());
        $this->addChild($folder);
        $folder->setProperty('DisplayName', $displayName);
        $qry = new CreateEntityQuery($folder);
        $this->getContext()->addQueryAndResultObject($qry, $folder);
        return $folder;
    }

}