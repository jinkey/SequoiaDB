<?php
$errno_en = array(
-1     => "SDB_IO: IO Exception",
-2     => "SDB_OOM: Out of Memory",
-3     => "SDB_PERM: Permission Error",
-4     => "SDB_FNE: File Not Exist",
-5     => "SDB_FE: File Exist",
-6     => "SDB_INVALIDARG: Invalid Argument",
-7     => "SDB_INVALIDSIZE: Invalid size",
-8     => "SDB_INTERRUPT: Interrupt",
-9     => "SDB_EOF: Hit end of file",
-10    => "SDB_SYS: System error",
-11    => "SDB_NOSPC: No space is left on disk",
-12    => "SDB_EDU_INVAL_STATUS: EDU status is not valid",
-13    => "SDB_TIMEOUT: Timeout error",
-14    => "SDB_QUIESCED: Database is quiesced",
-15    => "SDB_NETWORK: Network error",
-16    => "SDB_NETWORK_CLOSE: Network is closed from remote",
-17    => "SDB_DATABASE_DOWN: Database is in shutdown status",
-18    => "SDB_APP_FORCED: Application is forced",
-19    => "SDB_INVALIDPATH: Given path is not valid",
-20    => "SDB_INVALID_FILE_TYPE: Unexpected file type specified",
-21    => "SDB_DMS_NOSPC: There's no space for DMS",
-22    => "SDB_DMS_EXIST: Collection already exists",
-23    => "SDB_DMS_NOTEXIST: Collection does not exist",
-24    => "SDB_DMS_RECORD_TOO_BIG: User record is too large",
-25    => "SDB_DMS_RECORD_NOTEXIST: Record does not exist",
-26    => "SDB_DMS_OVF_EXIST: Remote overflow record exists",
-27    => "SDB_DMS_RECORD_INVALID: Invalid record",
-28    => "SDB_DMS_SU_NEED_REORG: Storage unit need reorg",
-29    => "SDB_DMS_EOC: End of collection",
-30    => "SDB_DMS_CONTEXT_IS_OPEN: Context is already opened",
-31    => "SDB_DMS_CONTEXT_IS_CLOSE: Context is closed",
-32    => "SDB_OPTION_NOT_SUPPORT: Option is not supported yet",
-33    => "SDB_DMS_CS_EXIST: Collection space already exists",
-34    => "SDB_DMS_CS_NOTEXIST: Collection space does not exist",
-35    => "SDB_DMS_INVALID_SU: Storage unit file is invalid",
-36    => "SDB_RTN_CONTEXT_NOTEXIST: Context does not exist",
-37    => "SDB_IXM_MULTIPLE_ARRAY: More than one fields are array type",
-38    => "SDB_IXM_DUP_KEY: Duplicate key exist",
-39    => "SDB_IXM_KEY_TOO_LARGE: Index key is too large",
-40    => "SDB_IXM_NOSPC: No space can be found for index extent",
-41    => "SDB_IXM_KEY_NOTEXIST: Index key does not exist",
-42    => "SDB_DMS_MAX_INDEX: Hit max number of index",
-43    => "SDB_DMS_INIT_INDEX: Failed to initialize index",
-44    => "SDB_DMS_COL_DROPPED: Collection is dropped",
-45    => "SDB_IXM_IDENTICAL_KEY: Two records get same key and rid",
-46    => "SDB_IXM_EXIST: Duplicate index name",
-47    => "SDB_IXM_NOTEXIST: Index name does not exist",
-48    => "SDB_IXM_UNEXPECTED_STATUS: Unexpected index flag",
-49    => "SDB_IXM_EOC: Hit end of index",
-50    => "SDB_IXM_DEDUP_BUF_MAX: Hit the max of dedup buffer",
-51    => "SDB_RTN_INVALID_PREDICATES: Invalid predicates",
-52    => "SDB_RTN_INDEX_NOTEXIST: Index does not exist",
-53    => "SDB_RTN_INVALID_HINT: Invalid hint",
-54    => "SDB_DMS_NO_MORE_TEMP: No more temp collections are avaliable",
-55    => "SDB_DMS_SU_OUTRANGE: Exceed max number of storage unit",
-56    => "SDB_IXM_DROP_ID: \$id index can't be dropped",
-57    => "SDB_DPS_LOG_NOT_IN_BUF: Log was not found in log buf",
-58    => "SDB_DPS_LOG_NOT_IN_FILE: Log was not found in log file",
-59    => "SDB_PMD_RG_NOT_EXIST: Replication group does not exist",
-60    => "SDB_PMD_RG_EXIST: Replication group exists",
-61    => "SDB_INVALID_REQID: Invalid request id is received",
-62    => "SDB_PMD_SESSION_NOT_EXIST: Session ID does not exist",
-63    => "SDB_PMD_FORCE_SYSTEM_EDU: System EDU cannot be forced",
-64    => "SDB_NOT_CONNECTED: Database is not connected",
-65    => "SDB_UNEXPECTED_RESULT: Unexpected result received",
-66    => "SDB_CORRUPTED_RECORD: Corrupted record",
-67    => "SDB_BACKUP_HAS_ALREADY_START: Backup has already been started",
-68    => "SDB_BACKUP_NOT_COMPLETE: Backup is not completed",
-69    => "SDB_RTN_IN_BACKUP: Backup is in progress",
-70    => "SDB_BAR_DAMAGED_BK_FILE: Backup is corrupted",
-71    => "SDB_RTN_NO_PRIMARY_FOUND: No primary node was found",
-72    => "SDB_CAT_NODE_NOT_FOUND: Requested node does not exist",
-73    => "SDB_PMD_HELP_ONLY: Engine help argument is specified",
-74    => "SDB_PMD_CON_INVALID_STATE: Invalid connection state",
-75    => "SDB_CLT_INVALID_HANDLE: Invalid handle",
-76    => "SDB_CLT_OBJ_NOT_EXIST: Object does not exist",
-77    => "SDB_NET_ALREADY_LISTENED: Listening port is already occupied",
-78    => "SDB_NET_CANNOT_LISTEN: Unable to listen the specified address",
-79    => "SDB_NET_CANNOT_CONNECT: Unable to connect to the specified address",
-80    => "SDB_NET_NOT_CONNECT: Connection does not exist",
-81    => "SDB_NET_SEND_ERR: Failed to send",
-82    => "SDB_NET_TIMER_ID_NOT_FOUND: Timer does not exist",
-83    => "SDB_NET_ROUTE_NOT_FOUND: Route info does not exist",
-84    => "SDB_NET_BROKEN_MSG: Broken msg",
-85    => "SDB_NET_INVALID_HANDLE: Invalid net handle",
-86    => "SDB_DMS_INVALID_REORG_FILE: Invalid reorg file",
-87    => "SDB_DMS_REORG_FILE_READONLY: Reorg file is in read only mode",
-88    => "SDB_DMS_INVALID_COLLECTION_S: Collection status is not valid",
-89    => "SDB_DMS_NOT_IN_REORG: Collection is not in reorg state",
-90    => "SDB_REPL_GROUP_NOT_ACTIVE: Replication group is not activated",
-91    => "SDB_REPL_INVALID_GROUP_MEMBER: Node does not belong to the group",
-92    => "SDB_DMS_INCOMPATIBLE_MODE: Collection status is not compatible",
-93    => "SDB_DMS_INCOMPATIBLE_VERSION: Incompatible version for storage unit",
-94    => "SDB_REPL_LOCAL_G_V_EXPIRED: Version is expired for local group",
-95    => "SDB_DMS_INVALID_PAGESIZE: Invalid page size",
-96    => "SDB_REPL_REMOTE_G_V_EXPIRED: Version is expired for remote group",
-97    => "SDB_CLS_VOTE_FAILED: Failed to vote for primary",
-98    => "SDB_DPS_CORRUPTED_LOG: Log record is corrupted",
-99    => "SDB_DPS_LSN_OUTOFRANGE: LSN is out of boundary",
-100   => "SDB_UNKNOWN_MESSAGE: Unknown mesage is received",
-101   => "SDB_NET_UPDATE_EXISTING_NODE: Updated information is same as old one",
-102   => "SDB_CLS_UNKNOW_MSG: Unknown message",
-103   => "SDB_CLS_EMPTY_HEAP: Empty heap",
-104   => "SDB_CLS_NOT_PRIMARY: Node is not primary",
-105   => "SDB_CLS_NODE_NOT_ENOUGH: Not enough number of data nodes",
-106   => "SDB_CLS_NO_CATALOG_INFO: Catalog information does not exist on data node",
-107   => "SDB_CLS_DATA_NODE_CAT_VER_OLD: Catalog version is expired on data node",
-108   => "SDB_CLS_COORD_NODE_CAT_VER_OLD: Catalog version is expired on coordinator node",
-109   => "SDB_CLS_INVALID_GROUP_NUM: Exceeds the max group size",
-110   => "SDB_CLS_SYNC_FAILED: Failed to sync log",
-111   => "SDB_CLS_REPLAY_LOG_FAILED: Failed to replay log",
-112   => "SDB_REST_EHS: Invalid HTTP header",
-113   => "SDB_CLS_CONSULT_FAILED: Failed to negotiate",
-114   => "SDB_DPS_MOVE_FAILED: Failed to change DPS metadata",
-115   => "SDB_DMS_CORRUPTED_SME: SME is corrupted",
-116   => "SDB_APP_INTERRUPT: Application is interrupted",
-117   => "SDB_APP_DISCONNECT: Application is disconnected",
-118   => "SDB_OSS_CCE: Character encoding errors",
-119   => "SDB_COORD_QUERY_FAILED: Failed to query on coord node",
-120   => "SDB_CLS_BUFFER_FULL: Buffer array is full",
-121   => "SDB_RTN_SUBCONTEXT_CONFLICT: Sub context is conflict",
-122   => "SDB_COORD_QUERY_EOC: EOC message is received by coordinator node",
-123   => "SDB_DPS_FILE_SIZE_NOT_SAME: Size of DPS files are not the same",
-124   => "SDB_DPS_FILE_NOT_RECOGNISE: Invalid DPS log file",
-125   => "SDB_OSS_NORES: No resource is avaliable",
-126   => "SDB_DPS_INVALID_LSN: Invalid LSN",
-127   => "SDB_OSS_NPIPE_DATA_TOO_BIG: Pipe buffer size is too small",
-128   => "SDB_CAT_AUTH_FAILED: Catalog authentication failed",
-129   => "SDB_CLS_FULL_SYNC: Full sync is in progress",
-130   => "SDB_CAT_ASSIGN_NODE_FAILED: Failed to assign data node from coordinator node",
-131   => "SDB_PHP_DRIVER_INTERNAL_ERROR: PHP driver internal error",
-132   => "SDB_COORD_SEND_MSG_FAILED: Failed to send the message",
-133   => "SDB_CAT_NO_NODEGROUP_INFO: Unable to find the group information on catalog",
-134   => "SDB_COORD_REMOTE_DISC: Remote-node is disconnected",
-135   => "SDB_CAT_NO_MATCH_CATALOG: Unable to find the catalog information",
-136   => "SDB_CLS_UPDATE_CAT_FAILED: Failed to update catalog",
-137   => "SDB_COORD_UNKNOWN_OP_REQ: Unknown request operation code",
-138   => "SDB_COOR_NO_NODEGROUP_INFO: Group information cannot be found on coordinator node",
-139   => "SDB_DMS_CORRUPTED_EXTENT: DMS extent is corrupted",
-140   => "SDBCM_FAIL: Remote cluster manager failed",
-141   => "SDBCM_STOP_PART: Remote database services have been stopped",
-142   => "SDBCM_SVC_STARTING: Service is starting",
-143   => "SDBCM_SVC_STARTED: Service has been started",
-144   => "SDBCM_SVC_RESTARTING: Service is restarting",
-145   => "SDBCM_NODE_EXISTED: Node already exists",
-146   => "SDBCM_NODE_NOTEXISTED: Node does not exist",
-147   => "SDB_LOCK_FAILED: Unable to lock",
-148   => "SDB_DMS_STATE_NOT_COMPATIBLE: DMS state is not compatible with current command",
-149   => "SDB_REBUILD_HAS_ALREADY_START: Database rebuild is already started",
-150   => "SDB_RTN_IN_REBUILD: Database rebuild is in progress",
-151   => "SDB_RTN_COORD_CACHE_EMPTY: Cache is empty on coordinator node",
-152   => "SDB_SPT_EVAL_FAIL: Evalution failed with error",
-153   => "SDB_CAT_GRP_EXIST: Group already exist",
-154   => "SDB_CLS_GRP_NOT_EXIST: Group does not exist",
-155   => "SDB_CLS_NODE_NOT_EXIST: Node does not exist",
-156   => "SDB_CM_RUN_NODE_FAILED: Failed to start the node",
-157   => "SDB_CM_CONFIG_CONFLICTS: Invalid node configuration",
-158   => "SDB_CLS_EMPTY_GROUP: Group is empty",
-159   => "SDB_RTN_COORD_ONLY: The operation is for coord node only",
-160   => "SDB_CM_OP_NODE_FAILED: Failed to operate on node only",
-161   => "SDB_RTN_MUTEX_JOB_EXIST: The mutex job already exist",
-162   => "SDB_RTN_JOB_NOT_EXIST: The specified job does not exist",
-163   => "SDB_CAT_CORRUPTION: The catalog information is corrupted",
-164   => "SDB_IXM_DROP_SHARD: \$shard index can't be dropped",
-165   => "SDB_RTN_CMD_NO_NODE_AUTH: The command can't be run in the node",
-166   => "SDB_RTN_CMD_NO_SERVICE_AUTH: The command can't be run in the serice plane",
-167   => "SDB_CLS_NO_GROUP_INFO: The group info not exist",
-168   => "SDB_CLS_GROUP_NAME_CONFLICT: Group name is conflict",
-169   => "SDB_COLLECTION_NOTSHARD: The collection is not sharded",
-170   => "SDB_INVALID_SHARDINGKEY: The record does not contains valid sharding key",
-171   => "SDB_TASK_EXIST: A task that already exists does not compatible with the new task",
-172   => "SDB_CL_NOT_EXIST_ON_GROUP: The collection does not exists on the specified group",
-173   => "SDB_CAT_TASK_NOTFOUND: The specified task does not exist",
-174   => "SDB_MULTI_SHARDING_KEY: The record contains more than one sharding key",
-175   => "SDB_CLS_MUTEX_TASK_EXIST: The mutex task already exist",
-176   => "SDB_CLS_BAD_SPLIT_KEY: The split key is not valid or not in the source group",
-177   => "SDB_SHARD_KEY_NOT_IN_UNIQUE_KEY: The unique index must include all fields in sharding key",
-178   => "SDB_UPDATE_SHARD_KEY: Sharding key cannot be updated",
-179   => "SDB_AUTH_AUTHORITY_FORBIDDEN: Authority is forbidden",
-180   => "SDB_CAT_NO_ADDR_LIST: There is no catalog address specified by user",
-181   => "SDB_CURRENT_RECORD_DELETED: Current record has been removed",
-182   => "SDB_QGM_MATCH_NONE: No records can be matched for the search condition",
-183   => "SDB_IXM_REORG_DONE: Index page is reorged and the pos got different lchild",
-184   => "SDB_RTN_DUPLICATE_FIELDNAME: Duplicate field name exists in the record",
-185   => "SDB_QGM_MAX_NUM_RECORD: Too many records to be inserted at once",
-186   => "SDB_QGM_MERGE_JOIN_EQONLY: Sort-Merge Join only supports equal predicates",
-187   => "SDB_PD_TRACE_IS_STARTED: Trace is already started",
-188   => "SDB_PD_TRACE_HAS_NO_BUFFER: Trace buffer does not exist",
-189   => "SDB_PD_TRACE_FILE_INVALID: Trace file is not valid",
-190   => "SDB_DPS_TRANS_LOCK_INCOMPATIBLE: Incompatible lock",
-191   => "SDB_DPS_TRANS_DOING_ROLLBACK: Rollback operation is in progress",
-192   => "SDB_MIG_IMP_BAD_RECORD: Invalid record is found during import",
-193   => "SDB_QGM_REPEAT_VAR_NAME: Repeated variable name",
-194   => "SDB_QGM_AMBIGUOUS_FIELD: Column name is ambiguous",
-195   => "SDB_SQL_SYNTAX_ERROR: SQL syntax error",
-196   => "SDB_DPS_TRANS_NO_TRANS: Invalid transactional operation",
-197   => "SDB_DPS_TRANS_APPEND_TO_WAIT: Append to lock-wait-queue",
-198   => "SDB_DMS_DELETING: Record is deleted",
-199   => "SDB_DMS_INVALID_INDEXCB: Index is dropped or invalid",
-200   => "SDB_COORD_RECREATE_CATALOG: Unable to create new catalog when there's already one exists",
-201   => "SDB_UTIL_PARSE_JSON_INVALID: Failed to parse JSON file",
-202   => "SDB_UTIL_PARSE_CSV_INVALID: Failed to parse CSV file",
-203   => "SDB_DPS_LOG_FILE_OUT_OF_SIZE: Log file size is too large",
-204   => "SDB_CATA_RM_NODE_FORBIDDEN: Unable to remove the last node in a group",
-205   => "SDB_CATA_FAILED_TO_CLEANUP: Unable to clean up catalog, manual cleanup may be required",
-206   => "SDB_CATA_RM_CATA_FORBIDDEN: Unable to remove catalog for non-empty database",
-207   => "SDB_CAT_GRP_NOT_EXIST: Group does not exist",
-208   => "SDB_CAT_RM_GRP_FORBIDDEN: Unable to remove non-empty group",
-209   => "SDB_MIG_END_OF_QUEUE: End of queue",
-210   => "SDB_COORD_SPLIT_NO_SHDIDX: Unable to split because of no sharding index exists",
-211   => "SDB_FIELD_NOT_EXIST: The parameter field does not exist",
-212   => "SDB_TOO_MANY_TRACE_BP: Too many break points are specified",
-213   => "SDB_BUSY_PREFETCHER: All prefetchers are busy",
-214   => "SDB_CAT_DOMAIN_NOT_EXIST: Domain does not exist",
-215   => "SDB_CAT_DOMAIN_EXIST: Domain already exists",
-216   => "SDB_CAT_GROUP_NOT_IN_DOMAIN: Group is not in domain",
-217   => "SDB_CLS_SHARDING_NOT_HASH: Sharding type is not hash",
-218   => "SDB_CLS_SPLIT_PERCENT_LOWER: split percentage is lower then expected",
-219   => "SDB_TASK_ALREADY_FINISHED: Task is already finished",
-220   => "SDB_COLLECTION_LOAD: Collection is in loading status",
-221   => "SDB_LOAD_ROLLBACK: Rolling back load operation",
-222   => "SDB_INVALID_ROUTEID: RouteID is different from the local",
-223   => "SDB_DUPLICATED_SERVICE: Service already exists",
-224   => "SDB_UTIL_NOT_FIND_FIELD: Field is not found",
-225   => "SDB_UTIL_CSV_FIELD_END: csv field line end",
-226   => "SDB_MIG_UNKNOW_FILE_TYPE: Unknown file type",
-227   => "SDB_RTN_EXPORTCONF_NOT_COMPLETE: Exporting configuration does not complete in all nodes",
-228   => "SDB_CLS_NOTP_AND_NODATA: Empty non-primary node",
-229   => "SDB_DMS_SECRETVALUE_NOT_SAME: Secret value for index file does not match with data file",
-230   => "SDB_PMD_VERSION_ONLY: Engine version argument is specified",
-231   => "SDB_SDB_HELP_ONLY: Help argument is specified",
-232   => "SDB_SDB_VERSION_ONLY: Version argument is specified",
-233   => "SDB_FMP_FUNC_NOT_EXIST: Stored procedure does not exist",
-234   => "SDB_ILL_RM_SUB_CL: Unable to remove collection partition",
-235   => "SDB_RELINK_SUB_CL: Duplicated attach collection partition",
-236   => "SDB_INVALID_MAIN_CL: Invalid partitioned-collection",
-237   => "SDB_BOUND_CONFLICT: New boundary is conflict with the existing boundary",
-238   => "SDB_BOUND_INVALID: Invalid boundary for the shard",
-239   => "SDB_HIT_HIGH_WATERMARK: Hit the high water mark",
-240   => "SDB_BAR_BACKUP_EXIST: Backup already exists",
-241   => "SDB_BAR_BACKUP_NOTEXIST: Backup does not exist",
-242   => "SDB_INVALID_SUB_CL: Invalid collection partition",
-243   => "SDB_TASK_HAS_CANCELED: Task is canceled",
-244   => "SDB_INVALID_MAIN_CL_TYPE: Sharding type must be ranged partition for partitioned-collection",
-245   => "SDB_NO_SHARDINGKEY: There is no valid sharding-key defined",
-246   => "SDB_MAIN_CL_OP_ERR: Operation is not supported on partitioned-collection",
-247   => "SDB_IXM_REDEF: Redefine index",
-248   => "SDB_DMS_CS_DELETING: Dropping the collection space is in progress",
-249   => "SDB_DMS_REACHED_MAX_NODES: Hit the limit of maximum number of nodes in the cluster",
-250   => "SDB_CLS_NODE_BSFAULT: The node is not in normal status",
-251   => "SDB_CLS_NODE_INFO_EXPIRED: Node information is expired",
-252   => "SDB_CLS_WAIT_SYNC_FAILED: Failed to wait for the sync operation from secondary nodes",
-253   => "SDB_DPS_TRANS_DIABLED: Transaction is disabled",
-254   => "SDB_DRIVER_DS_RUNOUT: Data source is running out of connection pool",
-255   => "SDB_TOO_MANY_OPEN_FD: Too many opened file description",
-256   => "SDB_DOMAIN_IS_OCCUPIED: Domain is not empty",
-257   => "SDB_REST_RECV_SIZE: The data received by REST is larger than the max size",
-258   => "SDB_DRIVER_BSON_ERROR: Failed to build bson object",
-259   => "SDB_OUT_OF_BOUND: Stored procedure arguments are out of bound",
-260   => "SDB_REST_COMMON_UNKNOWN: Unknown REST command",
-261   => "SDB_BUT_FAILED_ON_DATA: Failed to execute command on data node",
-262   => "SDB_CAT_NO_GROUP_IN_DOMAIN: The domain is empty",
-263   => "SDB_OM_PASSWD_CHANGE_SUGGUEST: Changing password is required",
-264   => "SDB_COORD_NOT_ALL_DONE: One or more nodes did not complete successfully",
-265   => "SDB_OMA_DIFF_VER_AGT_IS_RUNNING: There is another OM Agent running with different version",
-266   => "SDB_OM_TASK_NOT_EXIST: Task does not exist",
-267   => "SDB_OM_TASK_ROLLBACK: Task is rolling back",
-268   => "SDB_LOB_SEQUENCE_NOT_EXIST: LOB sequence does not exist",
-269   => "SDB_LOB_IS_NOT_AVAILABLE: LOB is not useable",
-270   => "SDB_MIG_DATA_NON_UTF: Data is not in UTF-8 format",
-271   => "SDB_OMA_TASK_FAIL: Task failed",
-272   => "SDB_LOB_NOT_OPEN: Lob does not open",
-273   => "SDB_LOB_HAS_OPEN: Lob has been open",
-274   => "SDBCM_NODE_IS_IN_RESTORING: Node is in restoring",
-275   => "SDB_DMS_CS_NOT_EMPTY: There are some collections in the collection space",
-276   => "SDB_CAT_LOCALHOST_CONFLICT: 'localhost' and '127.0.0.1' cannot be used mixed with other hostname and IP address",
-277   => "SDB_CAT_NOT_LOCALCONN: If use 'localhost' and '127.0.0.1' for hostname, coord and catalog must in the same host "
) ;
?>
