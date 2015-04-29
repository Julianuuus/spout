<?php

namespace Box\Spout\Reader\Internal\XLSX;

/**
 * Class Worksheet
 * Represents a worksheet within a XLSX file
 *
 * @package Box\Spout\Reader\Internal\XLSX
 */
class Worksheet
{
    /** @var \Box\Spout\Reader\Sheet The "external" sheet */
    protected $externalSheet;

    /** @var int Worksheet number, based on the order of appareance in [Content_Types].xml (zero-based) */
    protected $worksheetNumber;

    /** @var string Path of the XML file containing the worksheet data */
    protected $dataXmlFilePath;

    /**\
     * @param \Box\Spout\Reader\Sheet $externalSheet The associated "external" sheet
     * @param int $worksheetNumber Worksheet number, based on the order of appareance in [Content_Types].xml (zero-based)
     * @param string $dataXmlFilePath Path of the XML file containing the worksheet data
     */
    public function __construct($externalSheet, $worksheetNumber, $dataXmlFilePath)
    {
        $this->externalSheet = $externalSheet;
        $this->worksheetNumber = $worksheetNumber;
        $this->dataXmlFilePath = $dataXmlFilePath;
    }

    /**
     * @return string Path of the XML file containing the worksheet data, without the leading slash
     */
    public function getDataXmlFilePath()
    {
        return ltrim($this->dataXmlFilePath, '/');
    }

    /**
     * @return \Box\Spout\Reader\Sheet The "external" sheet
     */
    public function getExternalSheet()
    {
        return $this->externalSheet;
    }

    /**
     * @return int
     */
    public function getWorksheetNumber()
    {
        return $this->worksheetNumber;
    }
}
