<?php
/*************************************************************************************************
Libertempo : Gestion Interactive des Congés
Copyright (C) 2005 (cedric chauvineau)

Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les
termes de la Licence Publique Générale GNU publiée par la Free Software Foundation.
Ce programme est distribué car potentiellement utile, mais SANS AUCUNE GARANTIE,
ni explicite ni implicite, y compris les garanties de commercialisation ou d'adaptation
dans un but spécifique. Reportez-vous à la Licence Publique Générale GNU pour plus de détails.
Vous devez avoir reçu une copie de la Licence Publique Générale GNU en même temps
que ce programme ; si ce n'est pas le cas, écrivez à la Free Software Foundation,
Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307, États-Unis.
*************************************************************************************************
This program is free software; you can redistribute it and/or modify it under the terms
of the GNU General Public License as published by the Free Software Foundation; either
version 2 of the License, or any later version.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*************************************************************************************************/
namespace edition;

include_once LIBRARY_PATH .'tcpdf/tcpdf.php';

class PDF extends \TCPDF
{
    function Header()
    {
        /**************************************/
        /* affichage du texte en haut de page */
        /**************************************/
        $this->SetFont('Times','',10);
        $this->Cell(0,3, $_SESSION['config']['texte_haut_edition_papier'],0,1,'C');
        $this->Ln(10);
    }

    function Footer()
    {
        /**************************************/
        /* affichage du texte de bas de page */
        /**************************************/
        $this->SetFont('Times','',10);
        //$pdf->Cell(0,6, 'texte_haut_edition_papier',0,1,'C');
        $this->Cell(0,3, $_SESSION['config']['texte_bas_edition_papier'],0,1,'C');
        $this->Ln(10);
    }
}
