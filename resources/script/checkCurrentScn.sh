#!/bin/bash

ORACLE_BASE=/u01/app/oracle; export ORACLE_BASE;
ORACLE_HOME=/u01/app/oracle/product/11.2.0/xe; export ORACLE_HOME;
NLS_LANG=AMERICAN_AMERICA.AL32UTF8; export NLS_LANG;
ORACLE_SID=XE; export ORACLE_SID;


$ORACLE_HOME/bin/sqlplus -s $1/$2 <<EOF 
   select CURRENT_SCN from v\$database;
   exit;
EOF


