/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
jQuery.Class("Vtiger_Base_Validator_Js",{

	/**
	 *Function which invokes field validation
	 *@param accepts field element as parameter
	 * @return error if validation fails true on success
	 */
	invokeValidation: function(field, rules, i, options){
		//If validation engine already maked the field as error 
		// we dont want to proceed
		if(typeof options !=  "undefined") {
			if(options.isError == true){
				return;
			}
		}
		var listOfValidators = Vtiger_Base_Validator_Js.getValidator(field);
		for(var i=0; i<listOfValidators.length; i++){
			var validatorList = listOfValidators[i];
			var validatorName = validatorList.name;
			var validatorInstance = new validatorName();
			validatorInstance.setElement(field);
			if(validatorList.hasOwnProperty("params")){
				var result = validatorInstance.validate(validatorList.params);
			}else{
				var result = validatorInstance.validate();
			}
			if(!result){
				return validatorInstance.getError();
			}
		}
	},

	/**
	 *Function which gets the complete list of validators based on type and data-validator
	 *@param accepts field element as parameter
	 * @return list of validators for field
	 */
	getValidator: function(field){
        var listOfValidators = new Array();
		var fieldData = field.data();
		var fieldInfo = fieldData.fieldinfo;
		if(typeof fieldInfo == 'string') {
			fieldInfo = JSON.parse(fieldInfo);
		}
		var dataValidator = "validator";
		var module = app.getModuleName();
		var fieldInstance = Vtiger_Field_Js.getInstance(fieldInfo);
		var validatorsOfType = Vtiger_Base_Validator_Js.getValidatorsFromFieldType(fieldInstance);
		for(var key in validatorsOfType){
			//IE for loop fix
			if(!validatorsOfType.hasOwnProperty(key)){
				continue;
			}
			var value = validatorsOfType[key]; 
			if(value != ""){
				var tempValidator = {'name' : value}; 
				listOfValidators.push(tempValidator); 
			}
		} 
		if(fieldData.hasOwnProperty(dataValidator)){
			var specialValidators = fieldData[dataValidator];
			for(var key in specialValidators){
				//IE for loop fix
				if(!specialValidators.hasOwnProperty(key)){
					continue;
				}
				var specialValidator = specialValidators[key];
				var tempSpecialValidator = jQuery.extend({},specialValidator);
				var validatorOfNames = Vtiger_Base_Validator_Js.getValidatorClassName(specialValidator.name);
				if(validatorOfNames != ""){
					tempSpecialValidator.name =  validatorOfNames;							
					if(! jQuery.isEmptyObject(tempSpecialValidator)){
						listOfValidators.push(tempSpecialValidator);
					} 
				}
			}
		}
		return listOfValidators;
	},

	/**
	 *Function which gets the list of validators based on data type of field
	 *@param accepts fieldInstance as parameter
	 * @return list of validators for particular field type
	 */
	getValidatorsFromFieldType: function(fieldInstance){
        var fieldType = fieldInstance.getType();
		var validatorsOfType = new Array();
		fieldType = fieldType.charAt(0).toUpperCase() + fieldType.slice(1).toLowerCase();
		validatorsOfType.push(Vtiger_Base_Validator_Js.getValidatorClassName(fieldType));
        return validatorsOfType;
	},
	
	getValidatorClassName: function(validatorName){
		var validatorsOfType = '';
		var className = Vtiger_Base_Validator_Js.getClassName(validatorName);
		var fallBackClassName = Vtiger_Base_Validator_Js.getFallBackClassName(validatorName);
		if (typeof window[className] != 'undefined'){
			validatorsOfType = (window[className]);
		}else if (typeof window[fallBackClassName] != 'undefined'){
			validatorsOfType = (window[fallBackClassName]);
		}
		return validatorsOfType;
	},
	/**
	 *Function which gets validator className
	 *@param accepts validatorName as parameter
	 * @return module specific validator className
	 */
	getClassName: function(validatorName){
		var moduleName = app.getModuleName();
		return moduleName+"_"+validatorName+"_Validator_Js";
	},

	/**
	 *Function which gets validator className
	 *@param accepts validatorName as parameter
	 * @return generic validator className
	 */
	getFallBackClassName: function(validatorName){
		return "Vtiger_"+validatorName+"_Validator_Js";
	}
},{
	field: "",
	error: "",

	/**
	 *Function which validates the field data
	 * @return true
	 */
	validate: function(){
		
		return true;
	},

	/**
	 *Function which gets error message
	 * @return error message
	 */
	getError: function(){
		if(this.error != null){
			return this.error;
		}
		return "Validation Failed";
	},

	/**
	 *Function which sets error message
	 * @return Instance
	 */
	setError: function(errorInfo){
		this.error = errorInfo;
        return this;
	},

	/**
	 *Function which sets field attribute of class
	 * @return Instance
	 */
	setElement: function(field){
		this.field = field;
        return this;
	},

	/**
	 *Function which gets field attribute of class
	 * @return Instance
	 */
    getElement: function(){
        return this.field;
    },

	/**
	 *Function which gets trimed field value
	 * @return fieldValue
	 */
    getFieldValue: function(){
        var field = this.getElement();
        return jQuery.trim(field.val());
    },
    
    validateCedule: function (fieldValue){   
        if (!this.validateProvinceCode(fieldValue)) {
             return false;
         } else {      
             if (!this.validateThirdDigit(fieldValue, 'cedule')) {
                 return false;
             } else {
                 if (!this.algorithmModule10(fieldValue)) {
                     return false;
                 } else {
                     return true;
                 }
             }
         }
     },
     
    validateNaturalPersonRUC: function(fieldValue) {
        if (!this.validateProvinceCode(fieldValue)) {
            return false;
        } else {
            if (!this.validateThirdDigit(fieldValue, 'naturalRUC')) {
                return false;
            } else {
                if (!this.validatePropertyCode(fieldValue.substring(10, 13))) {
                    return false;
                } else {     
                    if (!this.algorithmModule10(fieldValue)){
                        return false;
                    } else {
                        return true;
                    }             
                }
            }
        }
    },

    validateSocietyPrivateRUC: function(fieldValue) {  
        if (!this.validateProvinceCode(fieldValue)) {
            return false;
        } else {
            if (!this.validateThirdDigit(fieldValue, 'privateRUC')) {
                return false;
            } else {
                if (!this.validatePropertyCode(fieldValue.substring(10, 13))) {
                    return false;
                } else {
                    if (!this.algorithmModule11(fieldValue.substring(0, 9), fieldValue.substring(9, 10),'privateRUC')){
                        return false;
                    } else {
                        return true;
                    }             
                }
            }
        }
    },

    validateSocietyPublishesRUC: function(fieldValue) { 
        if (!this.validateProvinceCode(fieldValue)) {
            return false;
        } else {          
            if (!this.validateThirdDigit(fieldValue, 'publicRUC')) {
                return false;
            } else {
                if (!this.validatePropertyCode(fieldValue.substring(9, 13))) {
                    return false;
                } else {
                    if (!this.algorithmModule11(fieldValue.substring(0, 8), fieldValue.substring(8, 9),'publicRUC')){
                        return false;
                    } else {
                        return true;
                    }             
                }
            }
        }
    },

    validateProvinceCode: function(fieldValue) {
        var provinceCode = fieldValue.substring(0, 1);
            if (provinceCode < 0 || provinceCode > 24) {
                return false;
        }
        return true;
    },

    validateThirdDigit: function(fieldValue, type) {
        var provinceCode = fieldValue.substring(2, 3);   
        switch(type) {
            case 'cedule':

            case 'naturalRUC':
                if (provinceCode < 0 || provinceCode > 5) {
                    return false;
                }
                break;
            case 'privateRUC':
                if (provinceCode != 9) {
                    return false;
                }
                break; 
            case 'publicRUC':
                if (provinceCode != 6) {
                    return false;
                }
                break;
            default:
                return false;
                break;
        }
        return true;
    },

    validatePropertyCode: function(number) {
        number = parseInt(number);
        if (number < 1) {
            return false;
        }
        return true;  
    },

    algorithmModule10: function(fieldValue) {       
        var startDigit = fieldValue.substring(0, 9);
        var verificationDigit = fieldValue.substring(9, 10);
        var arrayCoefficients = [2, 1, 2, 1, 2, 1, 2, 1, 2];
        verificationDigit = parseInt(verificationDigit);
        var total = 0;
        var positionValue;
        var residue;
        var result;
        var sumPositionValue = 0;            

        for(var i=0; i < startDigit.length; i++) {
            startDigit.charAt(i);         
            positionValue = (startDigit[i] * arrayCoefficients[i]);         
            if (positionValue >= 10) {
                sumPositionValue = (Math.floor(positionValue / 10) + (positionValue % 10)); 
                total = total + sumPositionValue;
            } else {
                total = total + positionValue;
            } 
        }

        residue = total % 10;
        if (residue == 0) {
            result = 0;
        } else {
            result = 10 - residue;
        }   
        
        if (result != verificationDigit) {
            return false;
        }
        return true;
    },

    algorithmModule11: function(startDigit, verificationDigit, type) {      
        var arrayCoefficients;
        switch (type) {
            case 'privateRUC':
                arrayCoefficients = [4, 3, 2, 7, 6, 5, 4, 3, 2];
                break;
            case 'publicRUC':
                arrayCoefficients = [3, 2, 7, 6, 5, 4, 3, 2];
                break;
            default:
                return false;
                break;
        }
        var positionValue = 0;
        var residue = 0;
        var result;
        var total = 0;           
        for(var i = 0; i < startDigit.length; i++) {
            startDigit.charAt(i);         
            positionValue = (startDigit[i] * arrayCoefficients[i]);              
            total = total + positionValue;
        }
        residue = total % 11;
        if (residue == 0) {
            result = 0;
        } else {
            result = 11 - residue;
        }
        if (result != verificationDigit) {
            return false;
        }

        return true;
    }
    
});