<?php
/*
 * Copyright (C) 2011 OPEN WIDE
 * 
 * This file is part of OWSortOperator.
 *
 * OWSortOperator is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Foobar is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 */

class OWSortOperator extends OWSimpleOperator
{
    
    public $attribute_name;
	
	
    /*********************************************************************
     OPERATORS IMPLEMENTATION
     *********************************************************************/
    
    /*!
     * Sort an array and maintain index association
     */
    public function sort( $array )
    {
    	return $this->array_sort( __FUNCTION__,  $array );
    }
    
    /*!
     * Sort an array in reverse order and maintain index association
     */
    public function rsort( $array )
    {
    	return $this->array_sort( __FUNCTION__,  $array );
    }
    
    /*!
     * Sort an array and maintain index association
     */
    public function asort( $array )
    {
    	return $this->array_sort( __FUNCTION__,  $array );
    }
    
    /*!
     * Sort an array in reverse order and maintain index association
     */
    public function arsort( $array )
    {
    	return $this->array_sort( __FUNCTION__,  $array );
    }
    
    /*!
     * Sort an array by key
     */
    public function ksort( $array )
    {
    	return $this->array_sort( __FUNCTION__,  $array );
    }
    
    /*!
     * Sort an array by key in reverse order
     */
    public function krsort( $array )
    {
    	return $this->array_sort( __FUNCTION__,  $array );
    }
    
    /*!
     * Sort an array using a "natural order" algorithm
     */
    public function natsort( $array )
    {
    	return $this->array_sort( __FUNCTION__,  $array );
    }
    
    /*!
     * Sort an array using a case insensitive "natural order" algorithm
     */
    public function natcasesort( $array )
    {
    	return $this->array_sort( __FUNCTION__,  $array );
    }
    
    /*!
     * Sort an array of ezobject or eznode by attribute value
     */
    public function ezsort( $array, $attribute_name )
    {
    	$this->attribute_name = $attribute_name;
    	usort( $array, array( $this, 'compare_ezobject_attribute' ) );
    	return $array;
    }
	
	
    /*********************************************************************
     UTILS
     *********************************************************************/
    
    /*!
     * Sort an array by using the function indicate as first parameter
     */
    protected function array_sort( $sort_function_name, $array )
    {
    	$sort_function_name( $array );
        return $array;
    }
    
    /*!
     * Compare two attributes of ezobject or eznode
     */
    public function compare_ezobject_attribute($a, $b)
    {
        $return = 1
        if ( $this->is_ezobject_or_eznode( $a ) && $this->is_ezobject_or_eznode( $b ) )
        {
            $a = $a->attribute( $attribute_name );
            $b = $b->attribute( $attribute_name );
            if ( $a == $b )
            {
                $return =  0;
            }
            else if ( $a < $b )
            {
                $return =  -1;
            }
        }
        return $return;
    }
    
}